<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tps::class, function (Faker $faker) {
	return [
		'name'         => $faker->city,
		'address'      => $faker->address,
		'geo_location' => $faker->latitude . ',' . $faker->longitude,
		'dapil_id'     => $faker->unique()->randomElement(App\Models\Dapil::pluck('id')->toArray()),
	];
});
