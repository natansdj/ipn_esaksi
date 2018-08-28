<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Pileg",
 *      required={"name", "dob", "pob", "partai"},
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
 *          property="partai",
 *          description="partai",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      )
 * )
 */
class Pileg extends Model
{
	use SoftDeletes;

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
	public $table = 'pilegs';
	public $fillable = [
		'province_id',
		'name',
		'name2',
		'dob',
		'pob',
		'partai',
		'type'
	];
	protected $dates = ['deleted_at'];
	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'province_id' => 'integer',
		'name'        => 'string',
		'name2'       => 'string',
		'dob'         => 'date',
		'pob'         => 'string',
		'partai'      => 'string',
		'type'        => 'string'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}
}
