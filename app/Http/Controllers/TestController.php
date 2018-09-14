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
//		$return['wilayah'] = Wilayah::select()->tingkat(1)->limit(1)->get()->toArray();

//		$return['dapil']     = Dapil::with(['rel_parent_wilayah', 'rel_wilayah'])->select()->limit(1)->get();
//		$return['tingkatan'] = Tingkatan::with(['wilayah'])->select()->limit(1)->get();
		$return['jqvmap']    = Jqvmap::with(['wilayah'])->dapilTingkat(0)->select()->limit(1)->get();

		return $this->sendResponse($return, '');
	}
}
