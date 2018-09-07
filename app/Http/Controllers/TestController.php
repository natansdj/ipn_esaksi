<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Tingkatan;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class TestController extends AppBaseController
{
	public function test()
	{
		$return['wilayah'] = Wilayah::select()
		                            ->tingkat(1)
		                            ->get()
		                            ->toArray();

		dd($return['wilayah']);

		$return['dapil']     = Dapil::with(['rel_parent_wilayah', 'rel_wilayah'])->select()->limit(1)->get();
		$return['tingkatan'] = Tingkatan::with(['wilayah'])->select()->limit(1)->get();

		return $this->sendResponse($return, '');
	}
}
