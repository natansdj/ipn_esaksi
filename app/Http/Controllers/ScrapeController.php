<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ScrapeController extends AppBaseController
{
	protected $site = 'https://infopemilu.kpu.go.id';
	protected $api_wil_cari;
	protected $api_wil_get;
	protected $api_dapil;

	public function __construct()
	{
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

	public function fetchWilayah(Request $request, $id = 0)
	{
		$returnData = [];
		$msg        = null;

		try {
			$output = $this->getWilayah($id);

			$returnData['count']   = count($output);
			$returnData['wilayah'] = $output;
		} catch (\Exception $e) {
			\Log::error($e);
			$msg = $e->getMessage();
		}

		return $this->sendResponse($returnData, $msg);
	}

	public function pullWilayah(Request $request, $id = 0)
	{
		$returnData     = [];
		$msg            = 'Success';
		$newData        = [];
		$updateOrCreate = $request->has('update');

		try {
			$jsonArray = $this->getWilayah($id);

			if ($jsonArray) {
				$existingId = Wilayah::get()->pluck('id')->toArray();

				$returnData['updateOrCreate'] = (bool) $updateOrCreate;
				$returnData['fetchedIds']     = count($jsonArray);
				$returnData['existingIds']    = count($existingId);

				Wilayah::unguard();
				foreach ($jsonArray as $key => $item) {
					$dataId = array_get($item, 'id');
					$tkWil  = array_get($item, 'tingkatWilayah');

					if ( ! $updateOrCreate && in_array($dataId, $existingId)) {
						continue;
					}

					//get detail from api
					$jsonDt = $this->getWilayahDt($dataId, $tkWil);

					//map data
					$singleData = [];
					foreach ($jsonDt as $a => $b) {
						$singleData[ snake_case($a) ] = $b;
					}
					$newData[] = $singleData;

					//atribute to compare
					$attribs = array_filter($singleData, function ($k) {
						return in_array($k, ['id', 'nama_wilayah']);
					}, ARRAY_FILTER_USE_KEY);

					Wilayah::updateOrCreate($attribs, $singleData);
				}
				Wilayah::reguard();

				$returnData['synced'] = count($newData);
			}

		} catch (\Exception $e) {
			\Log::error($e);
			$msg = $e->getMessage();

			return $this->sendError($msg);
		}

		return $this->sendResponse($returnData, $msg);
	}

	protected function getWilayah($id)
	{
		//get wilayah
		$client    = new Client();
		$request   = $client->get($this->api_wil_cari . $id);
		$response  = $request->getBody()->getContents();
		$jsonArray = json_decode($response, true);

		$isValidated = array_first($jsonArray, function ($val, $key) {
			return is_array($val) && array_has($val, 'id');
		});

		if ($jsonArray && $isValidated) {
			return $jsonArray;
		}

		return [];
	}

	protected function getWilayahDt($id, $tk = 0)
	{
		//get detail from api
		$client     = new Client();
		$requestDt  = $client->get($this->api_wil_get . $id . '/' . $tk);
		$responseDt = $requestDt->getBody()->getContents();
		$jsonDt     = json_decode($responseDt, true);

		//check returned detail
		if ( ! is_array($jsonDt) || ! array_has($jsonDt, 'id')) {
			return [];
		} else {
			return array_filter($jsonDt, function ($item) { return $item !== null; });
		}
	}
}
