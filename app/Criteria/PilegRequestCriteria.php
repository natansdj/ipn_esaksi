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
		$reqParams = ['name', 'partai'];
		$request   = $this->request->only($reqParams);

		$qString = array_get($request, 'search');

		foreach ($reqParams as $param) {
			if (array_has($request, $param) && array_get($request, $param) !== null) {
				$qString .= $param . ':' . array_get($request, $param);
			}
		}
		
		$type = $this->request->get('type');
		if ( ! is_null($type)) {
			$model = $model->whereHas('dapil', function ($q) use ($type) {
				return $q->where('tingkat', $type);
			});
		}

		$this->request->request->set('search', $qString);
		$this->request->request->add(['searchJoin' => 'and']);

		return parent::apply($model, $repository);
	}
}
