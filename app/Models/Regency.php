<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
	public function district()
	{
		return $this->hasMany(District::class);
	}
}
