<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
	protected $table = 'regencies';

	public function district()
	{
		return $this->hasMany(District::class);
	}

	public function province()
	{
		return $this->belongsTo(Province::class);
	}
}
