<?php

namespace App\Traits;

use App\Models\Dapil;
use App\Models\Pileg;
use Illuminate\Support\Facades\DB;

trait ApiPilegTrait
{
	protected $pileg_data;
	protected $pileg_partai;

	protected function fetchPileg($dapilId = null, $partaiId = 12)
	{
		if ($dapilId === null) {
			$dapils0 = Dapil::tingkatWilayah(0)->get()->pluck('id');
			$dapils1 = Dapil::tingkatWilayah(1)->get()->pluck('id');
			$dapils2 = Dapil::tingkatWilayah(2)->get()->pluck('id');
			$dapils  = array_merge($dapils0->toArray(), $dapils1->toArray(), $dapils2->toArray());
			$this->addReturnData('fetchDapil', count($dapils));

			$pilegData  = [];
			$countPileg = 0;
			foreach ($dapils as $dapilId) {
				$pilegData[] = $singleData = $this->getPileg($dapilId, $partaiId);
				$countPileg  = $countPileg + count($singleData);
			}
			$this->addReturnData('fetchPileg', $countPileg);

			$return = implode(',', $dapils);
		} else {
			$return = $this->getPileg($dapilId, $partaiId);
		}

		return $return;
	}

	protected function pullPileg($dapilId = null, $partaiId = 12)
	{
		if ($dapilId === null) {
			$pilegData = $this->getPileg(null, $partaiId);
		} else {
			$pilegData[ $dapilId . '_' . $partaiId ] = $this->getPileg($dapilId, $partaiId);
		}

		foreach ($pilegData as $id => $data) {
			$keys               = explode('_', $id);
			$this->pileg_partai = $partaiId = $keys[1];
			foreach ($data as $a => $b) {
				$saved = $this->savePileg($b);
			}
		}

		return $pilegData;
	}

	protected function savePileg($data)
	{
		if (empty($data) || ! is_array($data) || ! array_has($data, 'id')) {
			return null;
		}

		$id = array_get($data, 'id');
		if ( ! $this->request->has('update') && in_array($id, $this->pileg_existing)) {
			return null;
		}

		try {
			DB::beginTransaction();
			$singleData = [];
			foreach ($data as $a => $b) {
				$singleData[ snake_case($a) ] = $b;
			}

			$singleData['name']     = array_get($singleData, 'nama');
			$singleData['silon_id'] = array_get($singleData, 'id');
			$singleData['pob']      = array_get($singleData, 'nama_kab');
			$singleData['dapil_id'] = array_get($singleData, 'id_dapil');
			$singleData['note']     = array_get($singleData, 'file_path');
			$singleData['note']     = array_get($singleData, 'file_path');

			if (isset($this->pileg_partai) && ! empty($this->pileg_partai)) {
				$singleData['partai'] = $this->pileg_partai;
			}

			$attribs = array_only($singleData, ['id', 'silon_id']);
			/** @var Pileg $model */
			$model = Pileg::updateOrCreate($attribs, $singleData);
			$model->dapils()->syncWithoutDetaching(array_get($singleData, 'dapil_id'));

			//Add Count
			$prevCount = ( $this->getReturnData('syncedPileg') !== null ) ? $this->getReturnData('syncedPileg') : 0;
			$this->addReturnData('syncedPileg', $prevCount + 1);
		} catch (\Exception $e) {
			DB::rollBack();
			\Log::error($e);
			$msg = $e->getMessage();

			return $this->sendError($msg);
		}

		DB::commit();

		return $model->getAttributes();
	}

	protected function getPileg($dapilId, $partaiId)
	{
		if ($data = $this->getPilegData($dapilId, $partaiId)) {
			$pilegData = $data;
		} else {
			$pilegData = $this->apiGetPileg($dapilId, $partaiId);
			$this->addPilegData($dapilId, $partaiId, $pilegData);
		}

		return $pilegData;
	}

	public function getPilegData($dapilId, $partaiId)
	{
		if ( ! is_null($dapilId) && ! empty($dapilId)) {
			$key = implode('_', [$dapilId, $partaiId]);

			return ( array_has($this->pileg_data, $key) ) ? $this->pileg_data[ $key ] : null;
		} else {
			return $this->pileg_data;
		}
	}

	public function addPilegData($dapilId, $partaiId, $item)
	{
		$key                      = implode('_', [$dapilId, $partaiId]);
		$this->pileg_data[ $key ] = $item;
	}
}