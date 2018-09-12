<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

trait ApiKpuTrait
{
	protected $use_cache = true;
	protected $update_empty_cache = false;
	protected $site = 'https://infopemilu.kpu.go.id';
	protected $api_wil_cari;
	protected $api_wil_get;
	protected $api_dapil;
	protected $api_pileg;
	protected $expired_at;

	protected function initApiKpu()
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
		 * https://infopemilu.kpu.go.id/pileg2019/pencalonan/pengajuan-calon/1/12/calonDcs.json
		 */
		$this->api_pileg = $this->site . '/pileg2019/pencalonan/pengajuan-calon/';

		/**
		 * Note :
		 * https://infopemilu.kpu.go.id/pileg2019/pencalonan/1/dcs-dpr.json
		 *
		 */

		$this->expired_at = now()->addWeeks(2);
	}

	protected function apiGetWilayah($id)
	{
		$cache_key = 'apiGetWilayah_' . $id;
		if ( ! is_null($cache = $this->checkCache($cache_key))) {
			return $cache;
		}

		//get wilayah
		$client    = new Client();
		$request   = $client->get($this->api_wil_cari . $id);
		$response  = $request->getBody()->getContents();
		$jsonArray = json_decode($response, true);

		$isValidated = array_first($jsonArray, function ($val, $key) {
			return is_array($val) && array_has($val, 'id');
		});

		if (( $jsonArray && $isValidated ) || ! is_null($jsonArray)) {
			Cache::put($cache_key, $jsonArray, $this->expired_at);

			return $jsonArray;
		}

		return [];
	}

	protected function apiGetDapil($id, $tkWil)
	{
		$cache_key = 'apiGetDapil_' . $id . '_' . $tkWil;
		if ( ! is_null($cache = $this->checkCache($cache_key))) {
			return $cache;
		}

		//get wilayah
		$client    = new Client();
		$request   = $client->get($this->api_dapil . $id . '/' . $tkWil);
		$response  = $request->getBody()->getContents();
		$jsonArray = json_decode($response, true);

		$isValidated = array_first($jsonArray, function ($val, $key) {
			return is_array($val) && array_has($val, 'dapil') && array_get($val, 'dapil');
		});

		if (( $jsonArray && $isValidated ) || ! is_null($jsonArray)) {
			if ( ! empty($jsonArray)) {
				$jsonArray = array_get(array_first($jsonArray), 'dapil');
			}
			Cache::put($cache_key, $jsonArray, $this->expired_at);

			return $jsonArray;
		}

		return [];
	}

	protected function apiGetWilayahDt($id, $tkWil = 0)
	{
		$cache_key = 'apiGetWilayahDt_' . $id . '_' . $tkWil;
		if ( ! is_null($cache = $this->checkCache($cache_key))) {
			return $cache;
		}

		//get detail from api
		$client     = new Client();
		$requestDt  = $client->get($this->api_wil_get . $id . '/' . $tkWil);
		$responseDt = $requestDt->getBody()->getContents();
		$jsonDt     = json_decode($responseDt, true);

		//check returned detail
		if ( ! is_array($jsonDt) || ! array_has($jsonDt, 'id')) {
			$jsonArray = [];
		} else {
			$jsonArray = array_filter($jsonDt, function ($item) {
				return $item !== null;
			});
		}

		Cache::put($cache_key, $jsonArray, $this->expired_at);

		return $jsonArray;
	}


	protected function apiGetPileg($dapilId, $partaiId)
	{
		$cache_key = 'apiGetPileg_' . $dapilId . '_' . $partaiId;
		if ( ! is_null($cache = $this->checkCache($cache_key))) {
			return $cache;
		}

		//get Pileg
		$api_url   = $this->getApiPileg($dapilId, $partaiId);
		$client    = new Client();
		$request   = $client->get($api_url);
		$response  = $request->getBody()->getContents();
		$jsonArray = json_decode($response, true);

		if ($jsonArray === null) {
			//remove non-alphanumeric char except '.,"{}[]:/ '
			$response2 = preg_replace('@[^0-9a-z.,\'"{}\[\]:/ ]+@i', '-', $response);
			$jsonArray = json_decode($response2, true);
		}

		if ( ! is_null($jsonArray)) {
			Cache::put($cache_key, $jsonArray, $this->expired_at);

			return $jsonArray;
		}

		return [];
	}

	protected function checkCache($cache_key)
	{
		$cache = Cache::get($cache_key);
		if ($this->isUseCache() && ! is_null($cache)) {
			if (empty($cache) && $this->update_empty_cache) {
				//do nothing
			} else {
				return $cache;
			}
		}

		return null;
	}

	/**
	 * @return bool
	 */
	public function isUseCache(): bool
	{
		return $this->use_cache;
	}

	/**
	 * @param bool $use_cache
	 */
	public function setUseCache(bool $use_cache)
	{
		$this->use_cache = $use_cache;
	}

	public function getApiPileg($dapilId, $partaiId)
	{
		return $this->api_pileg . $dapilId . '/' . $partaiId . '/calonDcs.json';
	}
}
