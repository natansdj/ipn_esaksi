<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Pileg;
use App\Models\Tingkatan;
use App\Models\Wilayah;
use App\Traits\ApiKpuTrait;
use App\Traits\ApiPilegTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ScrapeController extends AppBaseController
{
	use ApiKpuTrait, ApiPilegTrait;

	protected $get_dapil = false;
	protected $return_data = [];

	/**
	 * @var Request
	 */
	protected $request;

	/**
	 * @var int
	 */
	protected $depth;
	protected $current_depth = 0;

	protected $wilayah = [];
	protected $dapil_wilayah = [];
	protected $dapils = [];
	protected $wilayah_existing;
	protected $dapil_existing;
	protected $pileg_existing;
	protected $wilayah_dt;

	public function __construct()
	{
		$this->initApiKpu();
		$this->addReturnData('isUsingCache', $this->use_cache);

		$this->wilayah_existing = Wilayah::get()->pluck('id')->toArray();
		$this->dapil_existing   = Dapil::get()->pluck('id')->toArray();
		$this->pileg_existing   = Pileg::get()->pluck('id')->toArray();
	}

	public function fetchPilegAction(Request $request, $dapilId = null, $partaiId = 12)
	{
		$this->request = $request;
		$pull          = $request->has('pull');

        $jsonArray = $this->fetchPileg($dapilId, $partaiId);

		if ($pull) {
			DB::disableQueryLog();
			set_time_limit(0);

			$this->addReturnData('isPull', true);
			$this->addReturnData('syncedPileg', 0);

			$dataPileg = $this->pullPileg($dapilId, $partaiId);
			DB::enableQueryLog();
		} else {
			$this->addReturnData('isUpdate', (bool) $this->request->has('update'));
		}

		$this->addReturnData('pileg', $jsonArray);

		return $this->sendResponse($this->getReturnData(), '');
	}

	public function fetchDapilAction(Request $request, $id = 0, $tkWil = 0)
	{
		$this->request = $request;
		$pull          = $request->has('pull');
		$msg           = null;

		try {
			$jsonArray = $this->fetchDapil($id, $tkWil);

			if ($jsonArray) {
				if ($pull) {
					return $this->pullDapil($id, $tkWil);
				}

				$this->addReturnData('count', count($jsonArray));
				$this->addReturnData('dapil', $jsonArray);
			}
		} catch (\Exception $e) {
			\Log::error($e);
			$msg = $e->getMessage();
		}

		return $this->sendResponse($this->getReturnData(), $msg);
	}

	public function fetchWilayahAction(Request $request, $id = 0)
	{
		$this->request   = $request;
		$this->get_dapil = $request->has('dapil');
		$this->depth     = $request->get('depth');
		$pull            = $request->has('pull');
		$msg             = null;

		DB::disableQueryLog();
		set_time_limit(0);
		//FETCH
		try {

			$jsonArray = $this->fetchWilayah($id);

			//DEPTH
			if ($jsonArray && $this->depth) {
				$depthArr = $jsonArray;
				for ($this->current_depth = 1; $this->current_depth <= $this->depth; $this->current_depth ++) {
					$currentArr = [];
					foreach ($depthArr as $item) {
						$wilayahArr = $this->fetchWilayah(array_get($item, 'id'));
						$currentArr = array_merge($currentArr, $wilayahArr);
					}
					$jsonArray = array_merge($jsonArray, $currentArr);
					$depthArr  = $currentArr;
				}
			}

			$wilayahIds = array_column($jsonArray, 'id');
			$wilayahIds = array_prepend($wilayahIds, 0);

			if ($jsonArray && $this->get_dapil) {
				foreach ($jsonArray as $key => $item) {
					$dataId   = array_get($item, 'id');
					$idParent = array_get($item, 'idParent');
					$tkWil    = array_get($item, 'tingkatWilayah');

					if ($idParent === 0) {
						$dapil0 = $this->fetchDapil($dataId, $idParent);
						if ($dapil0) {
							$item = array_add($item, 'dapil0', $dapil0);
						}
					}

					$dapil = $this->fetchDapil($dataId, $tkWil);
					if ($dapil) {
						$jsonArray[ $key ] = array_add($item, 'dapil', $dapil);
					}
				}
			}

			//PULL
			$this->addReturnData('depth', $this->depth);
			$this->addReturnData('count', count($jsonArray));
			if ($pull) {
				$this->addReturnData('isUpdate', (bool) $this->request->has('update'));
				$this->addReturnData('fetchWilayahCount', true);
				$this->addReturnData('fetchDapilCount', $this->get_dapil);
				$this->addReturnData('syncedWilayah', 0);
				$this->addReturnData('syncedTingkatanWilayah', 0);
				if ($this->get_dapil) {
					$this->addReturnData('syncedDapil', 0);
				}

				foreach ($wilayahIds as $wilId) {
					$this->pullWilayah($wilId);
				}
			} else {
				$this->addReturnData('wilayah', array_sum(array_map('count', $this->getWilayah())));
				$this->addReturnData('dapil', array_sum(array_map('count', $this->getDapil())));
			}

			$this->fetchDapilWilayah();
		} catch (\Exception $e) {
			\Log::error($e);
			$msg = $e->getMessage();

			return $this->sendError($msg);
		}

		DB::enableQueryLog();

		return $this->sendResponse($this->getReturnData(), $msg);
	}

	protected function fetchDapil($id, $tkWil)
	{
		if ($tkWil > 2) {
			return null;
		}

		$dapilKey  = implode('_', func_get_args());
		$jsonArray = $this->apiGetDapil($id, $tkWil);
		if ($jsonArray) {

			if ( ! $this->getDapil($dapilKey)) {
				$count = ( $this->getReturnData('fetchDapilCount') !== null )
					? (int) $this->getReturnData('fetchDapilCount') : 0;
				$this->addReturnData('fetchDapilCount', ( $count ) + count($jsonArray));
			}

			foreach ($jsonArray as $key => $item) {
				$this->addDapil($dapilKey, $item);
			}
		}

		return $jsonArray;
	}

	protected function fetchWilayah($id)
	{
		$jsonArray = $this->apiGetWilayah($id);

		if ($jsonArray) {
			foreach ($jsonArray as $key => $item) {
				$this->addWilayah($id, $item);

				$wilId = array_get($item, 'id');
				$wilTk = array_get($item, 'tingkatWilayah');
				$this->fetchWilayahDt($wilId, $wilTk);
			}
		}

		return $jsonArray;
	}

	protected function fetchWilayahDt($id, $tkWil = null, $loop = false)
	{
		$cache_key = 'fetchWilayahDt_' . $id;
		if ( ! empty($cache = $this->checkCache($cache_key)) && $tkWil !== 0 && ! is_null($tkWil)) {
			$this->addWilayahDt($id, $cache);

			return $cache;
		}

		$tkWil  = ( ! is_null($tkWil) ) ? $tkWil : 1;
		$return = null;

		try {
			do {
				$return = $this->apiGetWilayahDt($id, $tkWil);
				$tkWil  += 1;

				if ( ! $loop) {
					$tkWil = 999;
				}

			} while (empty($return) && $tkWil <= 4);
		} catch (\Exception $e) {

		}

		if ( ! is_null($return)) {
			if ( ! $this->getWilayahDt($id)) {
				$this->addWilayahCount();
				$this->addWilayahDt($id, $return);
				Cache::put($cache_key, $return, $this->expired_at);
			}

			return $return;
		}
	}

	protected function pullWilayah($id = 0)
	{
		try {
			$jsonArray = $this->apiGetWilayah($id);

			if ($jsonArray) {
				$this->addReturnData('existingWilayah', count($this->wilayah_existing));

				foreach ($jsonArray as $key => $item) {
					$dataId   = array_get($item, 'id');
					$idParent = array_get($item, 'idParent');
					$tkWil    = array_get($item, 'tingkatWilayah');

					//SAVE WILAYAH
					if ($idParent === 0) {
						$this->saveWilayah($dataId, $idParent);
					}
					$this->saveWilayah($dataId, $tkWil);

					//Get DAPIL
					if ($this->get_dapil) {
						//get dapil tingkat 0 if id_parent = 0 (DPR)
						if ($idParent === 0) {
							$this->pullDapil($dataId, $idParent);
						}
						$this->pullDapil($dataId, $tkWil);
					}
				}
			}

		} catch (\Exception $e) {
			throw $e;
		}
	}

	protected function pullDapil($id, $tkWil)
	{
		$jsonArray = $this->getDapil($id . '_' . $tkWil);
		if (is_null($jsonArray)) {
			$jsonArray = $this->fetchDapil($id, $tkWil);
		}

		if ($jsonArray) {
			foreach ($jsonArray as $key => $item) {
				$dataId = array_get($item, 'id');

				if ( ! $this->request->has('update') && in_array($dataId, $this->dapil_existing)) {
					continue;
				}

				//SAVE DAPIL
				//Map Data
				$singleData = [];
				foreach ($item as $a => $b) {
					$snakeCaseKey = snake_case($a);
					if (in_array($snakeCaseKey, ['wilayah', 'created_at', 'updated_at'])) {
						continue;
					}
					$singleData[ $snakeCaseKey ] = $b;
				}

                try {
                    DB::beginTransaction();
                    //atribute to compare
					$attribs = array_filter($singleData, function ($k) {
						return in_array($k, ['id', 'tingkat']);
					}, ARRAY_FILTER_USE_KEY);

					if ($singleData) {
						Dapil::updateOrCreate($attribs, $singleData);

						$countDapil = ( $this->getReturnData('syncedDapil') !== null )
							? $this->getReturnData('syncedDapil') : 0;
						$this->addReturnData('syncedDapil', $countDapil + 1);
					}
				} catch (\Exception $e) {
					DB::rollBack();
					throw $e;
				}
				DB::commit();
			}
		}
	}

	protected function fetchDapilWilayah()
	{
		if ( ! $this->request->has('dw')) {
			return;
		}

		$returnData = [];
		$baseDapil  = $this->getDapil();
		if ($baseDapil) {
			try {
				$insert_wilayah = $insert_wilayah_dapil = [];
				foreach ($baseDapil as $key => $dapils) {
					if (empty($dapils)) {
						continue;
					}

					$keyExpl = explode('_', $key);
					$dataId  = $keyExpl[0];
					$tkWil   = $keyExpl[1];

					//Proses Wilayah - Dapil
					$fetchWilayah          = $this->fetchWilayah($dataId);
					$returnData[ $dataId ] = $fetchWilayah;

					foreach ($dapils as $keyB => $dapil) {
						$wilayahs    = array_get($dapil, 'wilayah');
						$wilayahsIds = array_column($wilayahs, 'idWilayah');

						if (empty($wilayahs)) {
							continue;
						}

						foreach ($wilayahs as $keyC => $wilayah) {
							$tkWilC    = ( $tkWil != 0 ) ? $tkWil + 1 : 2;
							$idWilayah = array_get($wilayah, 'idWilayah');

							$this->fetchWilayahDt($idWilayah, $tkWilC);

							$wilCache         = $this->getWilayahDt($idWilayah);
							$insert_wilayah[] = [$idWilayah, array_get($wilCache, 'tingkatWilayah')];
						}

						//set dapil_wilayah
						$insert_wilayah_dapil[] = [array_get($dapil, 'id'), $wilayahsIds];
					}
				}

				if ($this->request->has('pull')) {
					$chunkWil = collect($insert_wilayah)->chunk(500);
					foreach ($chunkWil as $chunk) {
						foreach ($chunk as $item) {
							$this->saveWilayah($item[0], $item[1]);
						}
					}
					$chunkWilDap = collect($insert_wilayah_dapil)->chunk(100);
					foreach ($chunkWilDap as $chunk) {
						foreach ($chunk as $item2) {
							$modelDapil = Dapil::find($item2[0]);
							$modelDapil->rel_wilayah()->syncWithoutDetaching($item2[1]);
						}
					}
				}

				$return = $insert_wilayah_dapil;

			} catch (\Exception $e) {
				throw $e;
			}
		}

		$this->addReturnData('dapil_wilayah', array_sum(array_map('count', $returnData)));
	}

	protected function saveWilayah($id, $tkWil, $returnModel = false)
	{
		if ( ! $this->request->has('update') && in_array($id, $this->wilayah_existing)) {
			return ( $returnModel ) ? Wilayah::find($id) : null;
		}

		//get detail from api
		$jsonDt = $this->fetchWilayahDt($id, $tkWil);

		//map data
		$singleData = [];
		if ($jsonDt) {
			foreach ($jsonDt as $a => $b) {
				$singleData[ snake_case($a) ] = $b;
			}

			if ($singleData) {
                try {
                    DB::beginTransaction();
                    //atribute to compare
					$attribs = array_only($singleData, ['id', 'kode_wilayah']);

					//attribute for Tingkatan model
					$baseTingkat     = new Tingkatan();
					$tingkatanValues = array_only($singleData, $baseTingkat->fillable);
					$tingkatanValues = array_prepend($tingkatanValues, array_get($singleData, 'id'), 'wilayah_id');
					$tingkatanAttr   = array_only($tingkatanValues, ['tingkat_wilayah', 'wilayah_id']);

					$model          = Wilayah::updateOrCreate($attribs, $singleData);
					$modelTingkatan = Tingkatan::updateOrCreate($tingkatanAttr, $tingkatanValues);

					$this->addSyncedWilayahCount();
					$this->addSyncedTingkatanWilayahCount();

				} catch (\Exception $e) {
					DB::rollBack();
					throw $e;
				}
				DB::commit();

				return $model;
			}
		}

		return null;
	}

	protected function addReturnData($key, $value = null)
	{
		if (is_array($key)) {
			$this->return_data = array_merge($this->return_data, $key);
		} else if ( ! is_null($value)) {
			$this->return_data[ $key ] = $value;
		}
	}

	protected function addWilayahCount($count = 1)
	{
		$prevCount = ( $this->getReturnData('fetchWilayahCount') !== null )
			? $this->getReturnData('fetchWilayahCount') : 0;
		$this->addReturnData('fetchWilayahCount', $prevCount + $count);
	}

	protected function addSyncedWilayahCount($count = 1)
	{
		$prevCount = ( $this->getReturnData('syncedWilayah') !== null ) ? $this->getReturnData('syncedWilayah') : 0;
		$this->addReturnData('syncedWilayah', $prevCount + $count);
	}

	protected function addSyncedTingkatanWilayahCount($count = 1)
	{
		$prevCount = ( $this->getReturnData('syncedTingkatanWilayah') !== null ) ? $this->getReturnData('syncedTingkatanWilayah') : 0;
		$this->addReturnData('syncedTingkatanWilayah', $prevCount + $count);
	}

	public function getReturnData($key = null, $default = null)
	{
		if ( ! is_null($key) && ! empty($key)) {
			return ( array_has($this->return_data, $key) ) ? $this->return_data[ $key ] : $default;
		} else {
			return $this->return_data;
		}
	}

	public function addDapilWilayah($item)
	{
		$this->dapil_wilayah[] = $item;
	}

	public function getDapilWilayah()
	{
		return $this->dapil_wilayah;
	}

	protected function addDapil($key, $value)
	{
		$this->dapils[ $key ][] = $value;
	}

	public function getDapil($key = null, $default = null)
	{
		if ( ! is_null($key) && ! empty($key)) {
			return ( array_has($this->dapils, $key) ) ? $this->dapils[ $key ] : $default;
		} else {
			return $this->dapils;
		}
	}

	public function getWilayah($key = null, $default = null)
	{
		if ( ! is_null($key) && ! empty($key)) {
			return ( array_has($this->wilayah, $key) ) ? $this->wilayah[ $key ] : $default;
		} else {
			return $this->wilayah;
		}
	}

	public function addWilayah($key, $item)
	{
		$this->wilayah[ $key ][] = $item;
	}


	public function getWilayahDt($key = null, $default = null)
	{
		if ( ! is_null($key) && ! empty($key)) {
			return ( array_has($this->wilayah_dt, $key) ) ? $this->wilayah_dt[ $key ] : $default;
		} else {
			return $this->wilayah_dt;
		}
	}

	public function addWilayahDt($key, $item)
	{
		$this->wilayah_dt[ $key ] = $item;
	}

}
