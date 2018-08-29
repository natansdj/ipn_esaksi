<?php

namespace App\Http\Controllers\Web;

use App\DataTables\TpsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTpsRequest;
use App\Http\Requests\UpdateTpsRequest;
use App\Repositories\TpsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TpsController extends AppBaseController
{
	/** @var  TpsRepository */
	private $tpsRepository;

	public function __construct(TpsRepository $tpsRepo)
	{
		$this->tpsRepository = $tpsRepo;
	}

	/**
	 * Display a listing of the Tps.
	 *
	 * @param TpsDataTable $tpsDataTable
	 *
	 * @return Response
	 */
	public function index(TpsDataTable $tpsDataTable)
	{
		return $tpsDataTable->render('tps.index');
	}

	public function search()
	{
		return view('pages.tps_search');
	}

	/**
	 * Show the form for creating a new Tps.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tps.create');
	}

	/**
	 * Store a newly created Tps in storage.
	 *
	 * @param CreateTpsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateTpsRequest $request)
	{
		$input = $request->all();

		$tps = $this->tpsRepository->create($input);

		Flash::success('Tps saved successfully.');

		return redirect(route('tps.index'));
	}

	/**
	 * Display the specified Tps.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			Flash::error('Tps not found');

			return redirect(route('tps.index'));
		}

		return view('tps.show')->with('tps', $tps);
	}

	/**
	 * Show the form for editing the specified Tps.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			Flash::error('Tps not found');

			return redirect(route('tps.index'));
		}

		return view('tps.edit')->with('tps', $tps);
	}

	/**
	 * Update the specified Tps in storage.
	 *
	 * @param  int $id
	 * @param UpdateTpsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateTpsRequest $request)
	{
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			Flash::error('Tps not found');

			return redirect(route('tps.index'));
		}

		$tps = $this->tpsRepository->update($request->all(), $id);

		Flash::success('Tps updated successfully.');

		return redirect(route('tps.index'));
	}

	/**
	 * Remove the specified Tps from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$tps = $this->tpsRepository->findWithoutFail($id);

		if (empty($tps)) {
			Flash::error('Tps not found');

			return redirect(route('tps.index'));
		}

		$this->tpsRepository->delete($id);

		Flash::success('Tps deleted successfully.');

		return redirect(route('tps.index'));
	}
}
