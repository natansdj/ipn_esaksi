<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version August 27, 2018, 4:54 pm UTC
 *
 * @method User findWithoutFail( $id, $columns = ['*'] )
 * @method User find( $id, $columns = ['*'] )
 * @method User first( $columns = ['*'] )
 */
class UserRepository extends BaseRepository
{
	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'name',
		'email',
		'nik',
		'address'
	];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return User::class;
	}
}
