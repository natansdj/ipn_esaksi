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
}
