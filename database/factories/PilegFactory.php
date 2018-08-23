<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Pileg::class, function (Faker $faker) {
//	$attr_city   = ['Bandung', 'Jakarta', 'Yogyakarta'];
	$attr_city   = \App\Models\Regency::limit(10)->get()->pluck('name', 'id')->toArray();
	$attr_partai = ['PAN'];

	return [
		'name'     => $faker->name,
		'name2'    => $faker->unique()->name,
		'dob'      => $faker->date('Y-m-d', '1980-1-1'),
		'pob'      => $faker->randomElement($attr_city),
		'partai'   => $faker->randomElement($attr_partai),
		'dapil_id' => $faker->unique()->randomElement(App\Models\Dapil::pluck('id')->toArray()),
	];
});
