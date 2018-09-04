<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ScrapeController extends AppBaseController
{
	protected $site = 'https://infopemilu.kpu.go.id';

	public function test(Request $request, $id = 0)
	{
		$client   = new Client();
		$request  = $client->get($this->site . '/pileg2019/api/wilayah/cari/' . $id);
		$response = $request->getBody()->getContents();

		dd(json_decode($response, true));

		return $this->sendResponse(json_decode($response), 'Test');
	}
}
