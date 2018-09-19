<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	protected $toTruncate = ['users', 'tps'];

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

		factory('App\Models\Tps', 50)->create();

		factory(App\Models\User::class, 'admin')->create();
		factory('App\Models\User', 20)->create();
	}
}
