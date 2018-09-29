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

//		$return['tps'] = \App\Models\Tps::with(['votes', 'votes.voteable'])->whereHas('votes')->get();

		\Artisan::call('db:seed', ['--class' => 'VoteTableSeeder']);

//		$pileg      = \App\Models\Pileg::with('votesCount')->whereHas('votes')->first()->setAppends(['votes_total']);
		$pileg = \App\Models\Pileg::with('votesCount')->whereHas('votes')->get();
//		$pileg      = \App\Models\Pileg::with('votesCount')->whereHas('votes')->first();
//		$pilegCount = $pileg->votesTotal;

		$return['pileg'] = $pileg;

//		return $this->sendResponse($return, '');
		return view('layouts.debug', compact('return'));
	}
}
