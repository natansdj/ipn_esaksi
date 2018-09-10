<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

/**
 * @SWG\Definition(
 *      definition="Pileg",
 *      required={"name", "dob", "pob", "partai"},
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
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name2",
 *          description="name2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="dob",
 *          description="dob",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="pob",
 *          description="pob",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="dob2",
 *          description="dob",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="pob2",
 *          description="pob",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="partai",
 *          description="partai",
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
class Pileg extends Model
{
	use SoftDeletes;

	public $table = 'pilegs';

	public $fillable = [
		'province_id',
		'name',
		'name2',
		'dob',
		'pob',
		'partai',
		'type',
		'note'
	];
	protected $dates = ['dob', 'dob2', 'deleted_at'];
	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'province_id' => 'integer',
		'name'        => 'string',
		'name2'       => 'string',
		'dob'         => 'date:Y-m-d',
		'pob'         => 'string',
		'dob2'        => 'date:Y-m-d',
		'pob2'        => 'string',
		'partai'      => 'string',
		'type'        => 'string',
		'note'        => 'string'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'name'   => 'required',
		'dob'    => 'required',
		'pob'    => 'required',
		'partai' => 'required'
	];

	protected $with = ['dapil'];

	public function getDobAttribute($value)
	{
		if (isset($value) && ! empty($value)) {
			$value = Carbon::parse($value)->format(config('app.date_format'));
		}

		return $value;
	}

	public function getDob2Attribute($value)
	{
		if (isset($value) && ! empty($value)) {
			$value = Carbon::parse($value)->format(config('app.date_format'));
		}

		return $value;
	}

	public function getFormValue($key)
	{
		if ($this->hasCast($key, 'integer') && $this->hasGetMutator($key)) {
			return $this->getOriginal($key);
		} else if (in_array($key, $this->getDates())) {
			return Carbon::parse($this->getAttribute($key))->format(config('app.date_format'));
		} else {
			return $this->getAttribute($key);
		}
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}

	public function getCapresPartaiAttribute($value)
	{
		return ( array_has(PARTAI, $value) && array_get(PARTAI, $value) ) ? PARTAI[ $value ] : mb_strtoupper($value);
	}

	public function getCawapresPartaiAttribute($value)
	{
		return ( array_has(PARTAI, $value) && array_get(PARTAI, $value) ) ? PARTAI[ $value ] : mb_strtoupper($value);
	}

	public function getTypeAttribute($value)
	{
		return ( array_has(PILEG_TYPE, $value) && array_get(PILEG_TYPE, $value) ) ? PILEG_TYPE[ $value ] : mb_strtoupper($value);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 **/
	public function dapil()
	{
		return $this->belongsToMany(\App\Models\Dapil::class);
	}
}
