<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Tps",
 *      required={"name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="province_id",
 *          description="province_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="kodepos_id",
 *          description="kodepos_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="dapil_id",
 *          description="dapil_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="geo_location",
 *          description="geo_location",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="note",
 *          description="note",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="total_vote",
 *          description="total_vote",
 *          type="integer",
 *          format="int32"
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
class Tps extends Model
{
	use SoftDeletes;

	public $table = 'tps';


	protected $dates = ['deleted_at'];


	public $fillable = [
		'province_id',
		'kodepos_id',
		'dapil_id',
		'name',
		'address',
		'geo_location',
		'type',
		'note',
		'total_vote'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'province_id'  => 'integer',
		'kodepos_id'   => 'integer',
		'dapil_id'     => 'integer',
		'name'         => 'string',
		'address'      => 'string',
		'geo_location' => 'string',
		'type'         => 'string',
		'note'         => 'string',
		'total_vote'   => 'integer'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'name' => 'required'
	];

	public function user()
	{
		return $this->hasOne(User::class, 'tps_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function kodepos()
	{
		return $this->belongsTo(\App\Models\Kodepos::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function dapil()
	{
		return $this->belongsTo(\App\Models\Dapil::class);
	}

	public function votes()
	{
		return $this->hasMany(\App\Models\Vote::class);
	}
}
