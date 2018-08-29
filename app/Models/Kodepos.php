<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}
}
