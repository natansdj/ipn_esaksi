<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Dapil",
 *      required={"nama"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama",
 *          description="nama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="parent",
 *          description="parent",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tingkat",
 *          description="tingkat",
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
 *          property="wilayah_id",
 *          description="wilayah_id",
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
 *          property="alokasi_sisa_kursi",
 *          description="alokasi_sisa_kursi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="total_alokasi_kursi",
 *          description="total_alokasi_kursi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="id_versi",
 *          description="id_versi",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="no_dapil",
 *          description="no_dapil",
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
class Dapil extends Model
{
	use SoftDeletes;

	public $table = 'dapil';

	protected $dates = ['deleted_at'];

	public $fillable = [
		'nama',
		'parent',
		'tingkat',
		'jumlah_penduduk',
		'wilayah_id',
		'alokasi_kursi',
		'alokasi_sisa_kursi',
		'total_alokasi_kursi',
		'id_versi',
		'no_dapil'
	];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'nama'                => 'string',
		'parent'              => 'integer',
		'tingkat'             => 'integer',
		'jumlah_penduduk'     => 'integer',
		'wilayah_id'          => 'integer',
		'alokasi_kursi'       => 'integer',
		'alokasi_sisa_kursi'  => 'integer',
		'total_alokasi_kursi' => 'integer',
		'id_versi'            => 'integer',
		'no_dapil'            => 'integer'
	];

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public static $rules = [
		'nama' => 'required'
	];

	public function wilayah()
	{
		return $this->belongsToMany(\App\Models\Wilayah::class);
	}
}
