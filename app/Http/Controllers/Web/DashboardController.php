<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$dropdown_type = TINGKAT_DAPIL;

		return view('index', compact('dropdown_type'));
	}
}
