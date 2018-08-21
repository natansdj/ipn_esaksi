<?php

use Faker\Generator as Faker;

$factory->define(App\Pileg::class, function (Faker $faker) {
	$attr_city   = ['Bandung', 'Jakarta', 'Yogyakarta'];
	$attr_partai = ['PAN'];

	return [
		'name'   => $faker->name,
		'name2'  => $faker->unique()->name,
		'dob'    => $faker->date('Y-m-d', '1980-1-1'),
		'pob'    => $faker->randomElement($attr_city),
		'partai' => $faker->randomElement($attr_partai),
	];
});
