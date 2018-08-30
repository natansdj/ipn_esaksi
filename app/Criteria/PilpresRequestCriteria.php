<?php

namespace App\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class PilegRequestCriteria.
 *
 * @package namespace App\Criteria;
 */
class PilpresRequestCriteria extends RequestCriteria implements CriteriaInterface
{
	/**
	 * Apply criteria in query repository
	 *
	 * @param \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model $model
	 * @param RepositoryInterface $repository
	 *
	 * @return mixed
	 */
	public function apply($model, RepositoryInterface $repository)
	{
		$reqParams = ['capres_partai', 'type', 'cawapres_partai'];
		$request   = $this->request->all($reqParams);

		$qString = array_get($this->request, 'search');

		foreach ($reqParams as $param) {
			if (array_get($request, $param)) {
				$qString .= $param . ':' . array_get($request, $param);
			}
		}

		$this->request->request->set('search', $qString);

		return parent::apply($model, $repository);
	}
}
