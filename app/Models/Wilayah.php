<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Wilayah",
 *      required={"parent_id", "nama_wilayah"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="parent_id",
 *          description="parent_id",
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
 *          property="urutan_lampiran",
 *          description="urutan_lampiran",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="jumlah_penduduk",
 *          description="jumlah_penduduk",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="alokasi_kursi",
 *          description="alokasi_kursi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="bppd",
 *          description="bppd",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="jml_versi",
 *          description="jml_versi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="dapil",
 *          description="dapil",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="peta",
 *          description="peta",
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
class Wilayah extends Model
{
	use SoftDeletes;

	public $table = 'wilayah';

	protected $dates = ['deleted_at'];

	public $fillable = [
		'id',
		'parent_id',
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
		'depth_level',
		'urutan_lampiran',
		'jumlah_penduduk',
		'alokasi_kursi',
		'bppd',
		'jml_versi',
		'dapil',
		'peta'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'parent_id'         => 'integer',
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
		'depth_level'       => 'integer',
		'urutan_lampiran'   => 'integer',
		'jumlah_penduduk'   => 'integer',
		'alokasi_kursi'     => 'integer',
		'bppd'              => 'integer',
		'jml_versi'         => 'integer',
		'dapil'             => 'integer',
		'peta'              => 'string'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'parent_id'    => 'required',
		'nama_wilayah' => 'required'
	];

	public function dapil()
	{
		return $this->belongsToMany(\App\Models\Dapil::class, 'dapil_wilayah', 'dapil_id', 'wilayah_id');
	}
}
