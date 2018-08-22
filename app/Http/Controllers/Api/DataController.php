<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class DataController extends Controller
{

	public function open(Request $request)
	{
		$data = "This data is open and can be accessed without the client being authenticated";

		return response()->json(compact('data'), 200);

	}

	public function closed(Request $request)
	{
		$data = "Only authorized users can see this";

		return response()->json(compact('data'), 200);
	}
}
