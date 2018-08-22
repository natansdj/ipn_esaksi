<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tps extends Model
{
	public function users()
	{
		return $this->hasOne(User::class);
	}
}
