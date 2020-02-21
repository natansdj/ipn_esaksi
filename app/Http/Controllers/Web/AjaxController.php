<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Models\Dapil;
use App\Models\District;
use App\Models\Jqvmap;
use App\Models\Regency;
use App\Models\Village;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
				$tingkat_wilayah = array_get($data, 'tk', 1);
				$collection      = Wilayah::tkwilayah($tingkat_wilayah)->get(['nama_wilayah', 'id']);

				$response = $collection;
				break;
			case 'get_kabko' :
				$idProvinsi = array_get($data, 'prov');
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
				$dataTingkat = array_get($data, 'tk');
				$master      = new \StdClass();

				//Data Master
				$master->tingkat    = TINGKAT_DAPIL[ $dataTingkat ];
				$master->dateFormat = 'd M Y - H:i T';

				//Data Collection
				$dataModel  = Dapil::with(['pilegs'])->where('id_wilayah', $dataId)->where('tingkat', $dataTingkat)->get();
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

	public function get_map_data(Request $request)
	{
		#get data
		$data = $request->all();

		//START
		$path            = array_get($data, 'path');
		$request_type    = array_get($data, 'type', 'data');
		$tingkatDapil    = 0;
		$master          = new \StdClass();
		$master->tingkat = TINGKAT_DAPIL[ $tingkatDapil ];
		$response        = [
			'error'   => true,
			'message' => 'Please try again'
		];

		if (empty($path)) {
			return response()->json([], 200);
		}

		$cache_key    = 'get_map_data_' . implode('_', [$path, $request_type, $tingkatDapil]);
		$jsonResponse = Cache::remember($cache_key, 60, function () use ($path, $request_type, $tingkatDapil, $master) {
			//Data
			$model = Jqvmap::where('path', $path)->dapilTingkat($tingkatDapil)->get();
			if ($model && $model->isNotEmpty()) {
				/** @var Jqvmap $model */
				$model = $model->first();

				if (isset($model->dapil)
				    && $model->dapil instanceof \Illuminate\Database\Eloquent\Collection
				    && $model->dapil->isNotEmpty()
				) {
					$total_kursi = $model->dapil->sum('total_alokasi_kursi');
					$model->setAttribute('total_alokasi_kursi', $total_kursi);

					$model->dapil->each(function ($item) {
						$rel_wilayah = $item->rel_wilayah;
						$wilayah_str = title_case($rel_wilayah->implode('nama_wilayah', ', '));

						$item->attr_wilayah_str = $wilayah_str;
						$item->attr_wilayah     = $rel_wilayah->pluck('nama_wilayah', 'id');

						return $item;
					});
				}
			}

			//Data Collection
			$vars = compact('path', 'model', 'master');

			switch ($request_type) {
				case 'detail' :
					$html = view('components.map_box', $vars)->render();
					break;
				default:
					$html = view('components.map_label', $vars)->render();
					break;
			}
			$jsonResponse = array_merge($vars, compact('html'));

			return $jsonResponse;
		});

		$response = $jsonResponse;

		//END

		return response()->json($response, 200);
	}
}
