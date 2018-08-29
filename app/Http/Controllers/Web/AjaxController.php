<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\AppBaseController;
use App\Models\District;
use App\Models\Regency;
use App\Models\Village;
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
		$data     = $request->all();
		$response = [
			'error' => true
		];
		if ( ! empty($data)) {
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
				default:
					$response = [
						'error'   => true,
						'message' => 'Please try again'
					];
					break;
			}
		}

		return response()->json($response, 200);
	}
}
