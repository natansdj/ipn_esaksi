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
class PilegRequestCriteria extends RequestCriteria implements CriteriaInterface
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
		$reqParams = ['name', 'type', 'partai'];
		$request   = $this->request->only($reqParams);

		$qString = array_get($request, 'search');

		foreach ($reqParams as $param) {
			if (array_get($request, $param)) {
				$qString .= $param . ':' . array_get($request, $param);
			}
		}

		$this->request->request->set('search', $qString);
		$this->request->request->add(['searchJoin' => 'and']);

		return parent::apply($model, $repository);
	}
}
