<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
	protected $table = 'kodepos';

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 **/
	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class);
	}
}
