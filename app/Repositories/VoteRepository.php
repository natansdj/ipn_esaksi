<?php

namespace App\Repositories;

use App\Models\Vote;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VoteRepository
 * @package App\Repositories
 * @version August 29, 2018, 6:48 am UTC
 *
 * @method Vote findWithoutFail($id, $columns = ['*'])
 * @method Vote find($id, $columns = ['*'])
 * @method Vote first($columns = ['*'])
*/
class VoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'count'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vote::class;
    }
}
