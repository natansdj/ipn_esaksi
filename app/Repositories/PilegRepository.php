<?php

namespace App\Repositories;

use App\Models\Pileg;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilegRepository
 * @package App\Repositories
 * @version September 7, 2018, 3:18 pm UTC
 *
 * @method Pileg findWithoutFail( $id, $columns = ['*'] )
 * @method Pileg find( $id, $columns = ['*'] )
 * @method Pileg first( $columns = ['*'] )
 */
class PilegRepository extends BaseRepository
{
	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'name'  => 'like',
		'name2' => 'like',
		'type',
		'partai'
	];

	/**
	 * Configure the Model
	 **/
	public function model()
	{
		return Pileg::class;
	}
}
