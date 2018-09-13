<?php

namespace App\Http\Controllers\Web;

use App\Criteria\DapilTingkatCriteria;
use App\Models\Wilayah;
use App\Repositories\DapilRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	/** @var  DapilRepository */
	private $dapilRepository;

	public function __construct(DapilRepository $dapilRepo)
	{
		$this->dapilRepository = $dapilRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$tingkatWilayah = $request->get('tk');
		$provinsi       = $request->get('prov');
		$kabko          = $request->get('kabko');
		if ( ! is_null($tingkatWilayah) && $tingkatWilayah == 0) {
			$tingkatWilayah = 1;
		}

		//Initialize data
		$master = $collection = collect();

		//Data Collection
		if ($provinsi !== null || $tingkatWilayah !== null) {
			$master->tingkat    = ( array_has(TINGKAT_DAPIL, $tingkatWilayah) ) ? TINGKAT_DAPIL[ $tingkatWilayah ] : 0;
			$master->dateFormat = 'd M Y - H:i T';

			$this->dapilRepository->pushCriteria(new DapilTingkatCriteria($request));
			$dataModel  = $this->dapilRepository->with(['pilegs']);
			$collection = $dataModel->paginate(9);
		}

		//Dropdown
		$dd_type     = TINGKAT_DAPIL;
		$dd_provinsi = ( ! is_null($provinsi) ) ? Wilayah::tkwilayah(1)->get()->pluck('nama_wilayah', 'id') : [];
		$dd_kabko    = ( ! is_null($kabko) && ! is_null($provinsi) ) ? Wilayah::tkwilayah($tingkatWilayah)->where('id_parent', $provinsi)->get()->pluck('nama_wilayah', 'id') : [];

		$vars = compact('dd_type', 'dataId', 'dataTingkat', 'master', 'collection', 'dd_provinsi', 'dd_kabko');

		return view('index', $vars);
	}
}
