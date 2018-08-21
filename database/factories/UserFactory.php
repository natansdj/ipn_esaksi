<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(App\User::class, function (Faker $faker) {
	$attr_city     = \App\Regency::limit(10)->get()->pluck('name', 'id')->toArray();
	$attr_district = \App\District::limit(10)->get()->pluck('name', 'id')->toArray();
	$attr_village  = \App\Village::limit(10)->get()->pluck('name', 'id')->toArray();

	return [
		'name'           => $faker->name,
		'email'          => $faker->unique()->safeEmail,
		'password'       => bcrypt('123456'),
		'remember_token' => str_random(10),
		'nik'            => $faker->nik(),
		'gender'         => $faker->randomElement(['male', 'female']),
		'dob'            => $faker->date('Y-m-d', '1980-1-1'),
		'pob'            => $faker->randomElement($attr_city),
		'status'         => $faker->numberBetween(1, 2),
		'phone'          => $faker->phoneNumber,
		'occupation'     => $faker->numberBetween(1, 2),
		'address'        => $faker->address,
		'province'       => $faker->state(),
		'city'           => $faker->city,
		'kecamatan'      => $faker->randomElement($attr_district),
		'kelurahan'      => $faker->randomElement($attr_village),
	];
});

$factory->defineAs(App\User::class, 'admin', function (Faker $faker) use ($factory) {
	$data = $factory->raw('App\User');

	return array_merge($data, [
		'name'     => 'Admin ' . $faker->firstName(),
		'email'    => 'admin' . $faker->randomDigitNotNull . '@example.org',
		'is_admin' => true
	]);
});