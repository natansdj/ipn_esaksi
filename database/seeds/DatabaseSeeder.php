<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Disable all mass assignment restrictions
		Model::unguard();

		$this->call(ProvincesTableSeeder::class);
		$this->call(RegenciesTableSeeder::class);
		$this->call(DistrictsTableSeeder::class);
		$this->call(VillagesTableSeeder::class);

		$this->call(KodeposTableSeeder::class);

		$this->call(WilayahTableSeeder::class);
		$this->call(DapilTableSeeder::class);
		$this->call(DapilWilayahTableSeeder::class);
		$this->call(TingkatanTableSeeder::class);

		$this->call(UsersTableSeeder::class);
		$this->call(FacPilegTableSeeder::class);
		
		// Re enable all mass assignment restrictions
		Model::reguard();

	}
}
