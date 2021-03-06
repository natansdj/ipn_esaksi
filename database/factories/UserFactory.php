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
$factory->define(App\Models\User::class, function (Faker $faker) {
	$attr_city = \App\Models\Regency::limit(50)->get()->pluck('name', 'id')->toArray();

	$province_id = App\Models\Province::pluck('id')->random();
	$regency_id  = App\Models\Regency::where('province_id', $province_id)->pluck('id')->random();
	$district_id = App\Models\District::where('regency_id', $regency_id)->pluck('id')->random();
	$village_id  = App\Models\Village::where('district_id', $district_id)->pluck('id')->random();

	$used_tps_id = App\Models\User::pluck('tps_id')->filter()->toArray();
	$tps_id      = App\Models\Tps::whereNotIn('id', $used_tps_id)->pluck('id')->toArray();

	return [
		'name'           => $faker->name,
		'email'          => $faker->unique()->safeEmail,
		'password'       => bcrypt('123456'),
		'type'           => null,
		'remember_token' => str_random(10),
		'nik'            => $faker->nik(),
		'gender'         => $faker->randomKey(U_GENDER),
		'dob'            => $faker->date('Y-m-d', '1980-1-1'),
		'pob'            => $faker->randomElement($attr_city),
		'status'         => $faker->randomKey(U_STATUS),
		'phone'          => $faker->phoneNumber,
		'occupation'     => $faker->randomKey(U_OCCUPATION),
		'address'        => $faker->address,

		'province_id' => $province_id,
		'regency_id'  => $regency_id,
		'district_id' => $district_id,
		'village_id'  => $village_id,
		'tps_id'      => ( $tps_id && ! empty($tps_id) ) ? $faker->unique()->randomElement($tps_id) : null,
	];
});

$factory->defineAs(App\Models\User::class, 'admin', function (Faker $faker) use ($factory) {
	$data = $factory->raw('App\Models\User');

	return array_merge($data, [
		'name'     => 'Admin ' . $faker->firstName(),
		'email'    => 'admin@example.org',
		'tps_id'   => null,
		'is_admin' => true
	]);
});