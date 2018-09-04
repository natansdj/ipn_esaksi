<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	protected $table = 'provinces';

	public function regency()
	{
		return $this->hasMany(Regency::class);
	}
}
