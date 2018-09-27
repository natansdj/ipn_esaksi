<?php

namespace App\Repositories;

use App\Models\Tps;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TpsRepository
 * @package App\Repositories
 * @version September 28, 2018, 1:37 am WIB
 *
 * @method Tps findWithoutFail( $id, $columns = ['*'] )
 * @method Tps find( $id, $columns = ['*'] )
 * @method Tps first( $columns = ['*'] )
 */
class TpsRepository extends BaseRepository
{
	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'name',
		'address'
	];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return Tps::class;
	}
}
