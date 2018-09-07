<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tps::class, function (Faker $faker) {
	return [
		'name'        => $faker->city,
		'address'     => $faker->address,
		'dapil_id'    => $faker->unique()->randomElement(App\Models\Dapil::limit(10)->pluck('id')->toArray()),
		'province_id' => $faker->unique()->randomElement(App\Models\Province::pluck('id')->toArray()),
		'kodepos_id'  => $faker->unique()->randomElement(App\Models\Kodepos::pluck('id')->toArray()),
	];
});
