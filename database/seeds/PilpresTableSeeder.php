<?php

use Illuminate\Database\Seeder;

class PilpresTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table(with(new \App\Models\Pilpres)->getTable())->delete();

		factory('App\Models\Pilpres', 'jokowi')->create();
		factory('App\Models\Pilpres', 'prabowo')->create();
	}
}
