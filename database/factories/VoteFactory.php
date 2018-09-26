<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vote::class, function (Faker $faker) {
	$users  = \App\Models\User::limit(100)->get()->pluck('id')->toArray();
	$userId = $faker->unique()->randomElement($users);
	$user   = \App\Models\User::find($userId);

	$tps_id = $user->tps()->value('id');

	return [
		'tps_id'    => $tps_id,
		'user_id'   => $userId,
		'vote_date' => $faker->date(),
		'note'      => $faker->words(5, true),
		'count'     => $faker->numberBetween(30, 200),
	];
});

$factory->state(App\Models\Vote::class, 'pileg', [
	'voteable_type' => 'pileg',
]);

$factory->state(App\Models\Vote::class, 'pilpres', [
	'voteable_type' => 'pilpres',
]);