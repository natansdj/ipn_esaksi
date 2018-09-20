<?php

namespace App\Http\Controllers\Web;

use App\DataTables\DapilDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateDapilRequest;
use App\Http\Requests\UpdateDapilRequest;
use App\Models\Dapil;
use App\Repositories\DapilRepository;
use Flash;
use Response;

class DapilController extends AppBaseController
{
	/** @var  DapilRepository */
	private $dapilRepository;

	public function __construct(DapilRepository $dapilRepo)
	{
		$this->dapilRepository = $dapilRepo;
	}

	/**
	 * Display a listing of the Dapil.
	 *
	 * @param DapilDataTable $dapilDataTable
	 *
	 * @return Response
	 */
	public function index(DapilDataTable $dapilDataTable)
	{
		return $dapilDataTable->render('dapils.index');
	}

	public function getWilayahDetail($id)
	{
		$posts = Dapil::find($id)->rel_wilayah();

		return \DataTables::of($posts)->make(true);
	}

	/**
	 * Show the form for creating a new Dapil.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dapils.create');
	}

	/**
	 * Store a newly created Dapil in storage.
	 *
	 * @param CreateDapilRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateDapilRequest $request)
	{
		$input = $request->all();

		$dapil = $this->dapilRepository->create($input);

		Flash::success('Dapil saved successfully.');

		return redirect(route('dapils.index'));
	}

	/**
	 * Display the specified Dapil.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$dapil = $this->dapilRepository->findWithoutFail($id);

		if (empty($dapil)) {
			Flash::error('Dapil not found');

			return redirect(route('dapils.index'));
		}

		return view('dapils.show')->with('dapil', $dapil);
	}

	/**
	 * Show the form for editing the specified Dapil.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$dapil = $this->dapilRepository->findWithoutFail($id);

		if (empty($dapil)) {
			Flash::error('Dapil not found');

			return redirect(route('dapils.index'));
		}

		return view('dapils.edit')->with('dapil', $dapil);
	}

	/**
	 * Update the specified Dapil in storage.
	 *
	 * @param  int $id
	 * @param UpdateDapilRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateDapilRequest $request)
	{
		$dapil = $this->dapilRepository->findWithoutFail($id);

		if (empty($dapil)) {
			Flash::error('Dapil not found');

			return redirect(route('dapils.index'));
		}

		$dapil = $this->dapilRepository->update($request->all(), $id);

		Flash::success('Dapil updated successfully.');

		return redirect(route('dapils.index'));
	}

	/**
	 * Remove the specified Dapil from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$dapil = $this->dapilRepository->findWithoutFail($id);

		if (empty($dapil)) {
			Flash::error('Dapil not found');

			return redirect(route('dapils.index'));
		}

		$this->dapilRepository->delete($id);

		Flash::success('Dapil deleted successfully.');

		return redirect(route('dapils.index'));
	}
}
