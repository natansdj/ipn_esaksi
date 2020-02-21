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

		$count = 100;
		$users = \App\Models\User::noAdmin()->limit($count)->get();

		foreach ($users as $user) {
			$userId       = $user->id;
			$tps_id       = $user->tps()->value('id');
			$pilegs       = $user->tps->dapil->pilegs;
			$pilegs_count = $user->tps->dapil->pilegs()->count();

			factory('App\Models\Vote', $pilegs_count)
				->states('pileg')
				->make([
					'tps_id'  => $tps_id,
					'user_id' => $userId,
					'type'    => $user->tps->dapil->getOriginal('tingkat')
				])
				->each(function ($votes, $key) use ($user, $pilegs) {

					/**
					 * @var \Illuminate\Database\Eloquent\Collection $pilegs
					 * @var \App\Models\Pileg $pileg
					 * @var \App\Models\Vote $votes
					 */
					$pileg = $pilegs->get($key);

					if ($pileg) {
						$votes->voteable()->associate($pileg);
					}

					$votes->save();
				});
		}

		DB::enableQueryLog();
	}
}
