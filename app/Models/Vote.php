<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use \Illuminate\Database\Eloquent\Model;
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
	use SoftDeletes, FormAccessible {
		getFormValue as protected traitGetFormValue;
	}

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'tps_id'        => 'required',
		'user_id'       => 'required',
		'voteable_id'   => 'required',
		'voteable_type' => 'required',
		'count'         => 'required'
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
		'vote_date'     => 'date:Y-m-d',
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

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\MorphTo
	 */
	public function voteable()
	{
		return $this->morphTo();
	}

	public function scopeJenisVote($query, $jenis)
	{
		return $query->where('voteable_type', $jenis);
	}

	public function getVoteDateAttribute($value)
	{
		if (isset($value) && ! empty($value)) {
			$value = \Carbon\Carbon::parse($value)->format(config('app.date_format'));
		}

		return $value;
	}

	public function getTypeAttribute($value)
	{
		return ( array_has(TINGKAT_DAPIL, $value) ) ? array_get(TINGKAT_DAPIL, $value) : $value;
	}

	public function formTypeAttribute($value)
	{
		return $value;
	}
}
