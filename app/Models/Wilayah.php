<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Wilayah",
 *      required={"id_parent", "nama_wilayah"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_parent",
 *          description="id_parent",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama_wilayah",
 *          description="nama_wilayah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tingkat_wilayah",
 *          description="tingkat_wilayah",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_pro",
 *          description="id_pro",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_kab",
 *          description="id_kab",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_kec",
 *          description="id_kec",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_kel",
 *          description="id_kel",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama_pro",
 *          description="nama_pro",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nama_kab",
 *          description="nama_kab",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nama_kec",
 *          description="nama_kec",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nama_kel",
 *          description="nama_kel",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kode_wilayah",
 *          description="kode_wilayah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tingkat_pemilihan",
 *          description="tingkat_pemilihan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nomorsurat",
 *          description="nomorsurat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="tanggalsurat",
 *          description="tanggalsurat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="provinsi",
 *          description="provinsi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kabupaten",
 *          description="kabupaten",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kecamatan",
 *          description="kecamatan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kelurahan",
 *          description="kelurahan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="centroid_x",
 *          description="centroid_x",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="centroid_y",
 *          description="centroid_y",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="depth_level",
 *          description="depth_level",
 *          type="integer",
 *          format="int32"
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
class Wilayah extends Model
{
	use SoftDeletes;

	public $table = 'wilayah';

	protected $dates = ['deleted_at'];

	public $fillable = [
		'id',
		'id_parent',
		'nama_wilayah',
		'tingkat_wilayah',
		'id_pro',
		'id_kab',
		'id_kec',
		'id_kel',
		'nama_pro',
		'nama_kab',
		'nama_kec',
		'nama_kel',
		'kode_wilayah',
		'tingkat_pemilihan',
		'nomorsurat',
		'tanggalsurat',
		'provinsi',
		'kabupaten',
		'kecamatan',
		'kelurahan',
		'centroid_x',
		'centroid_y',
		'depth_level'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'id_parent'         => 'integer',
		'nama_wilayah'      => 'string',
		'tingkat_wilayah'   => 'integer',
		'id_pro'            => 'integer',
		'id_kab'            => 'integer',
		'id_kec'            => 'integer',
		'id_kel'            => 'integer',
		'nama_pro'          => 'string',
		'nama_kab'          => 'string',
		'nama_kec'          => 'string',
		'nama_kel'          => 'string',
		'kode_wilayah'      => 'string',
		'tingkat_pemilihan' => 'string',
		'nomorsurat'        => 'string',
		'tanggalsurat'      => 'string',
		'provinsi'          => 'string',
		'kabupaten'         => 'string',
		'kecamatan'         => 'string',
		'kelurahan'         => 'string',
		'centroid_x'        => 'string',
		'centroid_y'        => 'string',
		'depth_level'       => 'integer'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'id_parent'    => 'required',
		'nama_wilayah' => 'required'
	];

	protected $with = ['tingkatan'];

	public function rel_dapil()
	{
		return $this->hasMany(\App\Models\Dapil::class, 'id_wilayah');
	}

	public function tingkatan()
	{
		return $this->hasOne(\App\Models\Tingkatan::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function rel_dapil_wilayah()
	{
		return $this->belongsToMany(\App\Models\Dapil::class, 'dapil_wilayah');
	}

	/**
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param int $tingkat
	 *
	 * @return mixed
	 */
	public function scopeTingkat($query, $tingkat)
	{
		return $query->whereHas('tingkatan', function ($q) use ($tingkat) {
			/** @var \Illuminate\Database\Eloquent\Builder $q */
			$q->where('tingkat_wilayah', $tingkat);
		})->with([
			'tingkatan' => function ($q) use ($tingkat) {
				/** @var \Illuminate\Database\Eloquent\Builder $q */
				$q->tingkat($tingkat);
			}
		]);
	}
}
