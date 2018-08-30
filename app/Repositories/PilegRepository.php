<?php

namespace App\Repositories;

use App\Criteria\PilegRequestCriteria;
use App\Models\Pileg;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilegRepository
 * @package App\Repositories
 * @version August 29, 2018, 6:44 am UTC
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
