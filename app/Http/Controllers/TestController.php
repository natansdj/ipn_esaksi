<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class TestController extends AppBaseController
{
	public function test()
	{
		$return['wilayah'] = Wilayah::with(['rel_dapil'])->select()->limit(2)->get();
		$return['dapil'] = Dapil::with(['rel_parent_wilayah'])->select()->limit(1)->get();

		return $this->sendResponse($return, '');
	}
}
