<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Vote",
 *      required={"count"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tps_id",
 *          description="tps_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="vote_date",
 *          description="vote_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="note",
 *          description="note",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="count",
 *          description="count",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="voteable_id",
 *          description="voteable_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="voteable_type",
 *          description="voteable_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Vote extends Model
{
	use SoftDeletes;

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'count' => 'required'
	];
	public $table = 'votes';
	public $fillable = [
		'tps_id',
		'user_id',
		'vote_date',
		'note',
		'count',
		'voteable_id',
		'voteable_type',
		'type'
	];
	protected $dates = ['vote_date', 'deleted_at'];
	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'tps_id'        => 'integer',
		'user_id'       => 'integer',
		'vote_date'     => 'date',
		'note'          => 'string',
		'count'         => 'integer',
		'voteable_id'   => 'integer',
		'voteable_type' => 'string',
		'type'          => 'string'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function tps()
	{
		return $this->belongsTo(\App\Models\Tps::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}
}
