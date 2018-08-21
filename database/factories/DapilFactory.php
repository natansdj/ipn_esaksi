<?php

use Faker\Generator as Faker;

$factory->define(App\Dapil::class, function (Faker $faker) {
	return [
		'name'         => $faker->city,
		'address'      => $faker->address,
		'geo_location' => $faker->latitude . ',' . $faker->longitude,
	];
});
