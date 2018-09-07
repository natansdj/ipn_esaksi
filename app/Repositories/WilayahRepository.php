<?php

namespace App\Repositories;

use App\Models\Wilayah;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WilayahRepository
 * @package App\Repositories
 * @version September 7, 2018, 8:52 am UTC
 *
 * @method Wilayah findWithoutFail($id, $columns = ['*'])
 * @method Wilayah find($id, $columns = ['*'])
 * @method Wilayah first($columns = ['*'])
*/
class WilayahRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_wilayah'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Wilayah::class;
    }
}
