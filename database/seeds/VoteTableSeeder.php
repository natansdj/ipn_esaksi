<?php

use Illuminate\Database\Seeder;

class VoteTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::disableQueryLog();
		DB::table('votes')->truncate();

		factory('App\Models\Vote', 5)->create()->each(function ($votes, $key) {

			$user = \App\Models\User::find($votes->user_id);

			/**
			 * @var \App\Models\Pileg $pileg
			 */
			$pilegs    = $user->tps->dapil->pilegs;
			$usedPileg = \App\Models\Vote::where('tps_id', $votes->tps_id)
			                             ->where('voteable_type', 'pileg')
			                             ->get()
			                             ->pluck('voteable_id')->toArray();

			$pileg = $pilegs->whereNotIn('id', $usedPileg)->random();

			/**
			 * @var \App\Models\Vote $votes
			 */
			$votes->type = $user->tps->dapil->getOriginal('tingkat');
			$votes->voteable()->associate($pileg);

			$votes->save();
		});

		DB::enableQueryLog();
	}
}
