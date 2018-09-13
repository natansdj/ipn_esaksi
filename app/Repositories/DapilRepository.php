<?php

namespace App\Repositories;

use App\Models\Dapil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DapilRepository
 * @package App\Repositories
 * @version September 5, 2018, 2:47 pm UTC
 *
 * @method Dapil findWithoutFail( $id, $columns = ['*'] )
 * @method Dapil find( $id, $columns = ['*'] )
 * @method Dapil first( $columns = ['*'] )
 */
class DapilRepository extends BaseRepository
{
	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'nama',
		'tingkat',
		'id_wilayah',
	];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return Dapil::class;
	}
}
