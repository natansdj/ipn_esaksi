<?php

namespace App\Criteria;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class UserRegularCriteria.
 *
 * @package namespace App\Criteria;
 */
class UserRegularCriteria implements CriteriaInterface
{
	/**
	 * @var bool
	 */
	protected $only_regular;

	/**
	 * @var \Illuminate\Http\Request
	 */
	protected $request;

	public function __construct(Request $request, $onlyRegular = true)
	{
		$this->request      = $request;
		$this->only_regular = $onlyRegular;
	}

	/**
	 * Apply criteria in query repository
	 *
	 * @param Model|string $model
	 * @param RepositoryInterface $repository
	 *
	 * @return mixed
	 */
	public function apply($model, RepositoryInterface $repository)
	{
		if ($model instanceof User) {
			/** @var User $model */
			return $model->noAdmin($this->only_regular);
		} else {
			return $model;
		}
	}
}
