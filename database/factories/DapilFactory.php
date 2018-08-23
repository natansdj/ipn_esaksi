<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Dapil::class, function (Faker $faker) {
	return [
		'name'           => $faker->city,
		'address'        => $faker->address,
		'geo_location'   => $faker->latitude . ',' . $faker->longitude,
		'dapilable_id'   => App\Models\Province::pluck('id')->random(),
		'dapilable_type' => 'province',
	];
});
