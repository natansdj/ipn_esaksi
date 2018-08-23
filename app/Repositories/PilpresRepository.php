<?php

namespace App\Repositories;

use App\Models\Pilpres;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PilpresRepository
 * @package App\Repositories
 * @version August 23, 2018, 5:25 am UTC
 *
 * @method Pilpres findWithoutFail($id, $columns = ['*'])
 * @method Pilpres find($id, $columns = ['*'])
 * @method Pilpres first($columns = ['*'])
*/
class PilpresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'capres_name',
        'cawapres_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pilpres::class;
    }
}
