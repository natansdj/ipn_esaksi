<?php

namespace App\Repositories;

use App\Models\Tps;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TpsRepository
 * @package App\Repositories
 * @version August 29, 2018, 3:16 am UTC
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
