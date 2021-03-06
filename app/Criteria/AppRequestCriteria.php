<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class AppRequestCriteria
 * @package Prettus\Repository\Criteria
 */
class AppRequestCriteria extends RequestCriteria implements CriteriaInterface
{

	/**
	 * @SWG\Parameter(
	 *  parameter="RepoSearch",
	 *  name="search",
	 *  description="search",
	 *  type="string",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoSearchFields",
	 *  name="searchFields",
	 *  description="searchFields",
	 *  type="string",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoFilter",
	 *  name="filter",
	 *  description="filter",
	 *  type="string",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoOrderBy",
	 *  name="orderBy",
	 *  description="orderBy",
	 *  type="string",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoSortedBy",
	 *  name="sortedBy",
	 *  description="sortedBy",
	 *  default="asc",
	 *  type="string",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoLimit",
	 *  name="limit",
	 *  description="limit",
	 *  type="integer",
	 *  in="query"
	 * )
	 * @SWG\Parameter(
	 *  parameter="RepoOffset",
	 *  name="offset",
	 *  description="offset",
	 *  type="integer",
	 *  in="query"
	 * )
	 */
	/**
	 * Apply criteria in query repository
	 *
	 * @param         \Illuminate\Database\Query\Builder| \Illuminate\Database\Eloquent\Model $model
	 * @param RepositoryInterface $repository
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function apply($model, RepositoryInterface $repository)
	{
		$fieldsSearchable = $repository->getFieldsSearchable();
		$search           = $this->request->get(config('repository.criteria.params.search', 'search'), null);
		$searchFields     = $this->request->get(config('repository.criteria.params.searchFields', 'searchFields'), null);
		$filter           = $this->request->get(config('repository.criteria.params.filter', 'filter'), null);
		$orderBy          = $this->request->get(config('repository.criteria.params.orderBy', 'orderBy'), null);
		$sortedBy         = $this->request->get(config('repository.criteria.params.sortedBy', 'sortedBy'), 'asc');
		$with             = $this->request->get(config('repository.criteria.params.with', 'with'), null);
		$searchJoin       = $this->request->get(config('repository.criteria.params.searchJoin', 'searchJoin'), null);
		$sortedBy         = ! empty($sortedBy) ? $sortedBy : 'asc';

		if ($search && is_array($fieldsSearchable) && count($fieldsSearchable)) {

			$searchFields       = is_array($searchFields) || is_null($searchFields) ? $searchFields : explode(';', $searchFields);
			$fields             = $this->parserFieldsSearch($fieldsSearchable, $searchFields);
			$isFirstField       = true;
			$searchData         = $this->parserSearchData($search);
			$search             = $this->parserSearchValue($search);
			$modelForceAndWhere = strtolower($searchJoin) === 'and';

			$model = $model->where(function ($query) use ($fields, $search, $searchData, $isFirstField, $modelForceAndWhere) {
				/** @var Builder $query */

				foreach ($fields as $field => $condition) {

					if (is_numeric($field)) {
						$field     = $condition;
						$condition = "=";
					}

					$value = null;

					$condition = trim(strtolower($condition));

					if (isset($searchData[ $field ])) {
						$value = ( $condition == "like" || $condition == "ilike" ) ? "%{$searchData[$field]}%" : $searchData[ $field ];
					} else {
						if ( ! is_null($search)) {
							$value = ( $condition == "like" || $condition == "ilike" ) ? "%{$search}%" : $search;
						}
					}

					$relation = null;
					if (stripos($field, '.')) {
						$explode  = explode('.', $field);
						$field    = array_pop($explode);
						$relation = implode('.', $explode);
					}
					$modelTableName = $query->getModel()->getTable();
					if ($isFirstField || $modelForceAndWhere) {
						if ( ! is_null($value)) {
							if ( ! is_null($relation)) {
								$query->whereHas($relation, function ($query) use ($field, $condition, $value) {
									$query->where($field, $condition, $value);
								});
							} else {
								$query->where($modelTableName . '.' . $field, $condition, $value);
							}
							$isFirstField = false;
						}
					} else {
						if ( ! is_null($value)) {
							if ( ! is_null($relation)) {
								$query->orWhereHas($relation, function ($query) use ($field, $condition, $value) {
									$query->where($field, $condition, $value);
								});
							} else {
								$query->orWhere($modelTableName . '.' . $field, $condition, $value);
							}
						}
					}
				}
			});
		}

		if (isset($orderBy) && ! empty($orderBy)) {
			$split = explode('|', $orderBy);
			if (count($split) > 1) {
				/*
				 * ex.
				 * products|description -> join products on current_table.product_id = products.id order by description
				 *
				 * products:custom_id|products.description -> join products on current_table.custom_id = products.id order
				 * by products.description (in case both tables have same column name)
				 */
				$table      = $model->getModel()->getTable();
				$sortTable  = $split[0];
				$sortColumn = $split[1];

				$split = explode(':', $sortTable);
				if (count($split) > 1) {
					$sortTable = $split[0];
					$keyName   = $table . '.' . $split[1];
				} else {
					/*
					 * If you do not define which column to use as a joining column on current table, it will
					 * use a singular of a join table appended with _id
					 *
					 * ex.
					 * products -> product_id
					 */
					$prefix  = str_singular($sortTable);
					$keyName = $table . '.' . $prefix . '_id';
				}

				$model = $model
					->leftJoin($sortTable, $keyName, '=', $sortTable . '.id')
					->orderBy($sortColumn, $sortedBy)
					->addSelect($table . '.*');
			} else {
				$model = $model->orderBy($orderBy, $sortedBy);
			}
		}

		if (isset($filter) && ! empty($filter)) {
			if (is_string($filter)) {
				$filter = explode(';', $filter);
			}

			$model = $model->select($filter);
		}

		if ($with) {
			$with  = explode(';', $with);
			$model = $model->with($with);
		}

		return $model;
	}

}
