<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vote::class, function (Faker $faker) {
	return [
		'vote_date' => $faker->dateTimeBetween('-1 month', 'now'),
		'note'      => $faker->words(5, true),
		'count'     => $faker->numberBetween(30, 555),
	];
});

$factory->state(App\Models\Vote::class, 'pileg', [
	'voteable_type' => 'pileg',
]);

$factory->state(App\Models\Vote::class, 'pilpres', [
	'voteable_type' => 'pilpres',
]);