<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Jqvmap;
use App\Models\Tingkatan;
use App\Models\Wilayah;

class TestController extends AppBaseController
{
	public function test()
	{
		$return = [];
//		$return['wilayah']   = Wilayah::select()->tingkat(1)->limit(1)->get()->toArray();
//		$return['dapil']     = Dapil::with(['rel_parent_wilayah', 'rel_wilayah'])->select()->limit(1)->get();
//		$return['tingkatan'] = Tingkatan::with(['wilayah'])->select()->limit(1)->get();
//		$return['jqvmap']    = Jqvmap::with(['wilayah'])->dapilTingkat(0)->select()->limit(1)->get();

//		$return['user_same_tpsId'] = \App\Models\User::sameTps()->get(['id', 'tps_id'])->toArray();

//		\Artisan::call('db:seed', ['--class' => 'VoteTableSeeder']);

		/**
		 * PILEG
		 */
//		$pileg      = \App\Models\Pileg::with('votesCount')->whereHas('votes')->first()->setAppends(['votes_total']);
//		$pileg = \App\Models\Pileg::with('votesCount')->whereHas('votes')->get();
//		$return['pileg'] = $pileg;
		$return['pileg'] = \App\Models\Pileg::whereHas('dapils', function ($q) {
			$q->where('id', 1);
		})
		                                    ->includeVotesTotal()
		                                    ->limit(2)
		                                    ->whereHas('votes')
		                                    ->orderBy('votes_totals', 'DESC')
		                                    ->get();

		/**
		 * DAPIL
		 */
//		$dapil           = Dapil::select()
//		                        ->with(['votesCount', 'tps'])
//		                        ->limit(1)
//		                        ->get();
//		$data            = $dapil->map(function ($item, $key) {
//			$item->votes_total = $item->append('votes_total');
//
//			return $item;
//		});
//		$return['dapil'] = $data;

		/**
		 * TPS
		 */
		$return['tps'] = \App\Models\Tps::with('votesCount')
		                                ->limit(2)
		                                ->whereHas('votes')
//		                                ->orderBy('votes_total', 'DESC')
                                        ->get();

		return $this->sendResponse($return, '');
//		return view('layouts.debug', compact('return'));
	}
}
