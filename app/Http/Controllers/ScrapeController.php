<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ScrapeController extends AppBaseController
{
	protected $site = 'https://infopemilu.kpu.go.id';
	protected $api_wil_cari;
	protected $api_wil_get;
	protected $api_dapil;

	public function __construct() {
		/**
		 * https://infopemilu.kpu.go.id/pileg2019/api/wilayah/cari/0
		 */
		$this->api_wil_cari = $this->site . '/pileg2019/api/wilayah/cari/';
		
		/**
		 * https://infopemilu.kpu.go.id/pileg2019/api/wilayah/get/1/1
		 */
		$this->api_wil_get = $this->site . '/pileg2019/api/wilayah/get/';
		
		/**
		 * https://infopemilu.kpu.go.id/pileg2019/api/dapil/1/0
		 */
		$this->api_dapil = $this->site . '/pileg2019/api/dapil/';
		
		/**
		 * Note : 
		 * https://infopemilu.kpu.go.id/pileg2019/pencalonan/pengajuan-calon/1/12/calonDcs.json
		 * https://infopemilu.kpu.go.id/pileg2019/pencalonan/1/dcs-dpr.json
		 * 
		 */
	}
	
	public function test(Request $request, $id = 0)
	{
		$client   = new Client();
		$request  = $client->get($this->api_wil_cari . $id);
		$response = $request->getBody()->getContents();


		dd(json_decode($response, true));

		return $this->sendResponse(json_decode($response), 'Test');
	}
}
