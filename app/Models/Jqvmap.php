<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jqvmap extends Model
{
	protected $table = 'jqvmap';

	public function wilayah()
	{
		return $this->belongsTo(\App\Models\Wilayah::class);
	}

	public function dapil()
	{
		return $this->hasMany(\App\Models\Dapil::class, 'id_wilayah', 'wilayah_id');
	}

	/**
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param int $tingkat
	 *
	 * @return mixed
	 */
	public function scopeDapilTingkat($query, $tingkat = 0)
	{
		return $query->whereHas('dapil', function ($q) use ($tingkat) {
			/** @var \Illuminate\Database\Eloquent\Builder $q */
			$q->where('tingkat', $tingkat);
		})->with([
			'dapil' => function ($q) use ($tingkat) {
				/** @var \Illuminate\Database\Eloquent\Builder | \App\Models\Dapil $q */
				$q->tingkatWilayah($tingkat);
			}
		]);
	}
}
