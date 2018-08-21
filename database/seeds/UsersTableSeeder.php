<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\User::class, 'admin')->create();
		factory('App\User', 2)->create();

		factory('App\Dapil', 3)->create();
		factory('App\Pileg', 3)->create();
		factory('App\Pilpres', 3)->create();
		factory('App\Tps', 3)->create();
	}
}
