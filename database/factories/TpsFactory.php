<?php

use Faker\Generator as Faker;

$autoIncrement = autoIncrement();

$factory->define(App\Models\Tps::class, function (Faker $faker) use ($autoIncrement) {
	$autoIncrement->next();

	$dapils_id = \App\Models\Dapil::limit(100)->tingkatWilayah(0)->whereNotIn('id', function ($q) {
		/** @var \Illuminate\Database\Query\Builder $q */
		$q->from('tps')->select('dapil_id');
	})->pluck('id')->toArray();

	$province_id = \App\Models\Province::pluck('id')->toArray();
	$kodepos_id  = \App\Models\Kodepos::pluck('id')->toArray();

	return [
		'name'        => 'TPS ' . $autoIncrement->current(),
		'address'     => $faker->address,
		'dapil_id'    => ( $dapils_id && ! empty($dapils_id) ) ? $faker->randomElement($dapils_id) : null,
		'province_id' => $faker->randomElement($province_id),
		'kodepos_id'  => $faker->randomElement($kodepos_id),
	];
});

function autoIncrement()
{
	for ($i = 0; $i < 1000; $i ++) {
		yield $i;
	}
}