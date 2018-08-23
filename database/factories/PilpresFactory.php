<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Pilpres::class, function (Faker $faker) {
//	$attr_city   = ['Bandung', 'Jakarta', 'Yogyakarta'];
	$attr_city   = \App\Models\Regency::limit(10)->get()->pluck('name', 'id')->toArray();
	$attr_partai = ['PAN'];

	return [
		'capres_name'     => $faker->name,
		'capres_dob'      => $faker->date('Y-m-d', '1980-1-1'),
		'capres_pob'      => $faker->randomElement($attr_city),
		'capres_partai'   => $faker->randomElement($attr_partai),
		'cawapres_name'   => $faker->name,
		'cawapres_dob'    => $faker->date('Y-m-d', '1980-1-1'),
		'cawapres_pob'    => $faker->randomElement($attr_city),
		'cawapres_partai' => $faker->randomElement($attr_partai),
	];
});
