<?php

use Illuminate\Database\Seeder;

class FacPilegTableSeeder extends Seeder
{
	protected $toTruncate = ['pilegs', 'dapil_pileg'];

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

		factory('App\Models\Pileg', 10)->create()->each(function ($pileg) {

			$dapilsId = \App\Models\Dapil::select('id')->orderByRaw("RAND()")->limit(rand(1, 2))->get()->toArray();
			/**
			 * @var \App\Models\Pileg $pileg
			 */
			foreach ($dapilsId as $dapilId) {
				$pileg->dapil()->attach($dapilId);
			}
		});
	}
}
