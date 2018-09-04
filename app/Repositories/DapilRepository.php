<?php

namespace App\Repositories;

use App\Models\Dapil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DapilRepository
 * @package App\Repositories
 * @version September 4, 2018, 10:20 am UTC
 *
 * @method Dapil findWithoutFail($id, $columns = ['*'])
 * @method Dapil find($id, $columns = ['*'])
 * @method Dapil first($columns = ['*'])
*/
class DapilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dapil::class;
    }
}
