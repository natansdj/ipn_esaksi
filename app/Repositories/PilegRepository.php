<?php

namespace App\Repositories;

use App\Models\Pileg;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilegRepository
 * @package App\Repositories
 * @version September 12, 2018, 4:58 pm WIB
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
		'name' => 'like',
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
