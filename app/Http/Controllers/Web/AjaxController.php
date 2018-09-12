<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Models\Dapil;
use App\Models\District;
use App\Models\Regency;
use App\Models\Village;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AjaxController extends AppBaseController
{
	/**
	 * @param Request $request
	 * @param $type
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function ajax_method(Request $request, $type)
	{
		#get data
		$data = $request->all();
		switch ($type) {
			case 'get_regencies' :
				$id = array_get($data, 'id');

				$model = Regency::select(['name', 'id']);
				if ($id) {
					$model->where('province_id', $id);
				}
				$data = $model->get();
				if ($data && $data->isNotEmpty()) {
					$data = $data->pluck('name', 'id');
				}

				$response = [
					'error' => false,
					'data'  => $data,
					'count' => count($data),
				];
				break;
			case 'get_districts' :
				$id = array_get($data, 'id');

				$model = District::select(['name', 'id']);
				if ($id) {
					$model->where('regency_id', $id);
				}
				$data = $model->get();
				if ($data && $data->isNotEmpty()) {
					$data = $data->pluck('name', 'id');
				}

				$response = [
					'error' => false,
					'data'  => $data,
					'count' => count($data),
				];
				break;
			case 'get_villages' :
				$id = array_get($data, 'id');

				$model = Village::select(['name', 'id']);
				if ($id) {
					$model->where('district_id', $id);
				}
				$data = $model->get();
				if ($data && $data->isNotEmpty()) {
					$data = $data->pluck('name', 'id');
				}

				$response = [
					'error' => false,
					'data'  => $data,
					'count' => count($data),
				];
				break;
			case 'get_provinsi' :
				$tingkat_wilayah = array_get($data, 'tingkat_wilayah', 1);
				$collection      = Wilayah::tkwilayah($tingkat_wilayah)->get(['nama_wilayah', 'id']);

				$response = $collection;
				break;
			case 'get_kabko' :
				$idProvinsi = array_get($data, 'provinsi');
				$search     = array_get($data, 'search');
				$model      = Wilayah::where('id_parent', $idProvinsi);

				if ($search) {
					$model->where('nama_wilayah', 'like', '%' . $search . '%');
				}
				$collection = $model->get(['nama_wilayah', 'id']);

				$response = $collection;
				break;
			case 'get_polling' :
				$dataId      = array_get($data, 'id');
				$dataTingkat = array_get($data, 'tingkat');
				$master      = collect();

				//Data Master
				$master->tingkat    = TINGKAT_DAPIL[ $dataTingkat ];
				$master->dateFormat = 'd M Y - H:i T';
				
				//Data Collection
				$dataModel  = Dapil::with(['pileg'])->where('id_wilayah', $dataId)->where('tingkat', $dataTingkat)->get();
				$collection = $dataModel->map(function ($item, $key) {
					$item->jml_voter = rand(1, 999) . 'K';

					return $item;
				});

				$vars     = compact('dataId', 'dataTingkat', 'master', 'collection');
				$html     = view('dapils.dash_index', $vars)->render();
				$response = array_merge($vars, compact('html'));
				break;
			default:
				$response = [
					'error'   => true,
					'message' => 'Please try again'
				];
				break;
		}

		return response()->json($response, 200);
	}
}
