<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Pilpres",
 *      required={"capres_name", "cawapres_name"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="capres_name",
 *          description="capres_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="capres_dob",
 *          description="capres_dob",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="capres_pob",
 *          description="capres_pob",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="capres_partai",
 *          description="capres_partai",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cawapres_name",
 *          description="cawapres_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cawapres_dob",
 *          description="cawapres_dob",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="cawapres_pob",
 *          description="cawapres_pob",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cawapres_partai",
 *          description="cawapres_partai",
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
class Pilpres extends Model
{
	use SoftDeletes;
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'capres_name'   => 'required',
		'cawapres_name' => 'required'
	];
	public $table = 'pilpres';
	public $fillable = [
		'capres_name',
		'capres_dob',
		'capres_pob',
		'capres_partai',
		'cawapres_name',
		'cawapres_dob',
		'cawapres_pob',
		'cawapres_partai',
		'type',
		'note'
	];
	protected $dates = ['deleted_at'];
	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'capres_name'     => 'string',
		'capres_dob'      => 'date',
		'capres_pob'      => 'string',
		'capres_partai'   => 'string',
		'cawapres_name'   => 'string',
		'cawapres_dob'    => 'date',
		'cawapres_pob'    => 'string',
		'cawapres_partai' => 'string',
		'type'            => 'string',
		'note'            => 'string'
	];

	public function getPartaiAttribute($value)
	{
		return ( array_has(PARTAI, $value) && array_get(PARTAI, $value) ) ? PARTAI[ $value ] : mb_strtoupper($value);
	}

	public function getTypeAttribute($value)
	{
		return ( array_has(PILEG_TYPE, $value) && array_get(PILEG_TYPE, $value) ) ? PILEG_TYPE[ $value ] : mb_strtoupper($value);
	}
}
