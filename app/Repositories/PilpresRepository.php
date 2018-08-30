<?php

namespace App\Repositories;

use App\Models\Pilpres;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilpresRepository
 * @package App\Repositories
 * @version August 29, 2018, 6:45 am UTC
 *
 * @method Pilpres findWithoutFail( $id, $columns = ['*'] )
 * @method Pilpres find( $id, $columns = ['*'] )
 * @method Pilpres first( $columns = ['*'] )
 */
class PilpresRepository extends BaseRepository
{
	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'capres_name'   => 'like',
		'cawapres_name' => 'like',
		'capres_partai',
		'cawapres_partai',
		'type',
	];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return Pilpres::class;
	}
}
