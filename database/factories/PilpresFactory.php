<?php

use Faker\Generator as Faker;

$factory->defineAs(App\Models\Pilpres::class, 'jokowi', function (Faker $faker) {
	return [
		'capres_name'     => 'Ir. H. JOKO WIDODO',
		'capres_dob'      => \Carbon\Carbon::createFromFormat('Y-m-d', '1961-06-21'),
		'capres_pob'      => 'Surakarta',
		'capres_partai'   => 'PKB,PKPI,PDIP,Nasdem,Hanura,PPP,Golkar',
		'cawapres_name'   => 'Prof. Dr. (HC). KH. MA\'RUF AMIN',
		'cawapres_dob'    => \Carbon\Carbon::createFromFormat('Y-m-d', '1943-03-11'),
		'cawapres_pob'    => 'Tangerang',
		'cawapres_partai' => 'PKB,PKPI,PDIP,Nasdem,Hanura,PPP,Golkar',
	];
});

$factory->defineAs(App\Models\Pilpres::class, 'prabowo', function (Faker $faker) {
	return [
		'capres_name'     => 'H. PRABOWO SUBIANTO',
		'capres_dob'      => \Carbon\Carbon::createFromFormat('Y-m-d', '1951-10-17'),
		'capres_pob'      => 'Jakarta',
		'capres_partai'   => 'Demokrat,PKS,Gerindra,PAN',
		'cawapres_name'   => 'SANDIAGA SALAHUDDIN UNO, MBA.',
		'cawapres_dob'    => \Carbon\Carbon::createFromFormat('Y-m-d', '1969-06-28'),
		'cawapres_pob'    => 'Rumbai',
		'cawapres_partai' => 'Demokrat,PKS,Gerindra,PAN',
	];
});
