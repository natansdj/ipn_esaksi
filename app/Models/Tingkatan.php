<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tingkatan extends Model
{
	use SoftDeletes;

	public $table = 'tingkatan';

	protected $dates = ['deleted_at'];

	public $fillable = [
		'wilayah_id',
		'tingkat_wilayah',
		'urutan_lampiran',
		'jumlah_penduduk',
		'alokasi_kursi',
		'bppd',
		'jml_versi',
		'peta',
	];
}
