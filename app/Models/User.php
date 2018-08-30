<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 * Class User
 * @package App\Models
 *
 * @SWG\Definition(
 *      definition="User",
 *      required={"name", "email", "password"},
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nik",
 *          description="nik",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="gender",
 *          description="gender",
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
 *          property="status",
 *          description="status",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="occupation",
 *          description="occupation",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="province_id",
 *          description="province_id",
 *          type="string",
 *          maxLength=2
 *      ),
 *      @SWG\Property(
 *          property="regency_id",
 *          description="regency_id",
 *          type="string",
 *          maxLength=4
 *      ),
 *      @SWG\Property(
 *          property="district_id",
 *          description="district_id",
 *          type="string",
 *          maxLength=7
 *      ),
 *      @SWG\Property(
 *          property="village_id",
 *          description="village_id",
 *          type="string",
 *          maxLength=10
 *      ),
 *      @SWG\Property(
 *          property="tps_id",
 *          description="tps_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="is_active",
 *          description="is_active",
 *          type="boolean",
 *          default="true",
 *      ),
 *      @SWG\Property(
 *          property="is_admin",
 *          description="is_admin",
 *          type="boolean",
 *          default="false",
 *      ),
 *      @SWG\Property(
 *          property="remember_token",
 *          description="remember_token",
 *          type="string"
 *      ),
 *      items={"deleted_at", "created_at", "updated_at"}
 * )
 *
 * @SWG\Property(property="deleted_at", description="deleted_at", example="2018-12-05", type="string", format="date")
 * @SWG\Property(property="created_at", description="created_at", example="2018-12-05", type="string", format="date")
 * @SWG\Property(property="updated_at", description="updated_at", example="2018-12-05", type="string", format="date")
 */
class User extends Authenticatable implements JWTSubject
{
	use Notifiable, SoftDeletes;

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'email'    => 'required:email',
		'password' => 'sometimes|required|different:current_password|confirmed',
		'dob'      => 'date',
		'phone'    => 'numeric',
	];
	public $table = 'users';
	public $fillable = [
		'name',
		'email',
		'password',
		'nik',
		'gender',
		'dob',
		'pob',
		'status',
		'phone',
		'occupation',
		'address',
		'province_id',
		'regency_id',
		'district_id',
		'village_id',
		'tps_id',
		'is_active',
		'is_admin'
	];
	protected $dates = ['dob', 'deleted_at'];
	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'name'           => 'string',
		'email'          => 'string',
		'password'       => 'string',
		'type'           => 'string',
		'nik'            => 'string',
		'gender'         => 'string',
		'dob'            => 'date:Y-m-d',
		'pob'            => 'string',
		'status'         => 'integer',
		'phone'          => 'string',
		'occupation'     => 'string',
		'address'        => 'string',
		'tps_id'         => 'integer',
		'is_active'      => 'boolean',
		'is_admin'       => 'boolean',
		'remember_token' => 'string'
	];
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * Events
	 */
	protected static function boot()
	{
		parent::boot();

		static::deleting(function ($model) {
			/** @var self $model */
			if ($model->is_admin || $model->is_superadmin) {
				return false;
			}
		});
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
	public function regency()
	{
		return $this->belongsTo(\App\Models\Regency::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function district()
	{
		return $this->belongsTo(\App\Models\District::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function village()
	{
		return $this->belongsTo(\App\Models\Village::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 **/
	public function tps()
	{
		return $this->hasOne(\App\Models\Tps::class);
	}

	public function getJWTIdentifier()
	{
		return $this->getKey();
	}

	public function getJWTCustomClaims()
	{
		return [];
	}

	public function scopeNoAdmin($query, $show_regular = true)
	{
		$exclude = [ROLE_ADMIN];

		/** @var \Illuminate\Database\Eloquent\Builder $query */
		if ( ! $show_regular) {
			//admin only
			return $query->orWhere('is_admin', true);
		} else {
			//regular user only
			return $query->where('is_admin', false);
		}
	}

	public function getStatusLabelAttribute()
	{
		$val = $this->getAttribute('status');

		return ( array_has(U_STATUS, $val) ) ? array_get(U_STATUS, $val) : $val;
	}

	public function getOccupationLabelAttribute()
	{
		$val = $this->getAttribute('occupation');

		return ( array_has(U_OCCUPATION, $val) ) ? array_get(U_OCCUPATION, $val) : $val;
	}

	public function getIsUserAttribute($value)
	{
		return ( ! $this->getAttribute('is_admin') );
	}
}
