<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	protected $table = 'districts';

	public function village()
	{
		return $this->hasMany(Village::class);
	}

	public function regency()
	{
		return $this->belongsTo(Regency::class);
	}
}
