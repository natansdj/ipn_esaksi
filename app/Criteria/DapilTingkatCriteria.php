<?php

namespace App\Criteria;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class DapilTingkatCriteria.
 *
 * @package namespace App\Criteria;
 */
class DapilTingkatCriteria implements CriteriaInterface
{
	/**
	 * @var \Illuminate\Http\Request
	 */
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * Apply criteria in query repository
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $model
	 * @param RepositoryInterface $repository
	 *
	 * @return mixed
	 */
	public function apply($model, RepositoryInterface $repository)
	{
		$tkWilayah = $this->request->get('tk');
		$provinsi  = $this->request->get('prov');
		$kabko     = $this->request->get('kabko');

		if ( ! is_null($kabko)) {
			$model->where('id_wilayah', $kabko);
		} else if ( ! is_null($provinsi)) {
			$model->where('id_wilayah', $provinsi);
		}
		if ( ! is_null($tkWilayah)) {
			$model->where('tingkat', $tkWilayah);
		}

		return $model;
	}
}
