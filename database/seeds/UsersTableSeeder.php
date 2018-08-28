<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	protected $toTruncate = ['pilpres', 'pilegs', 'users', 'tps'];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach ($this->toTruncate as $table) {
			DB::table($table)->delete();
		}

		factory('App\Models\Tps', 5)->create();

		factory(App\Models\User::class, 'admin')->create();
		factory('App\Models\User', 2)->create();

		factory('App\Models\Pileg', 3)->create();
		factory('App\Models\Pilpres', 3)->create();
	}
}
