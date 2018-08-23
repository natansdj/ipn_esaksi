<?php

namespace App\Repositories;

use App\Models\Pileg;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilegRepository
 * @package App\Repositories
 * @version August 23, 2018, 5:52 am UTC
 *
 * @method Pileg findWithoutFail($id, $columns = ['*'])
 * @method Pileg find($id, $columns = ['*'])
 * @method Pileg first($columns = ['*'])
*/
class PilegRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'name2',
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
