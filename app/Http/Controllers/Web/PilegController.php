<?php

namespace App\Http\Controllers\Web;

use App\Criteria\PilegRequestCriteria;
use App\DataTables\PilegDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePilegRequest;
use App\Http\Requests\UpdatePilegRequest;
use App\Repositories\PilegRepository;
use Flash;
use Illuminate\Http\Request;
use Response;

class PilegController extends AppBaseController
{
	/** @var  PilegRepository */
	private $pilegRepository;

	public function __construct(PilegRepository $pilegRepo)
	{
		$this->pilegRepository = $pilegRepo;
	}

	/**
	 * Display a listing of the Pileg.
	 *
	 * @param PilegDataTable $pilegDataTable
	 *
	 * @return Response
	 */
	public function index(PilegDataTable $pilegDataTable)
	{
		return $pilegDataTable->render('pilegs.index');
	}

	/**
	 * daftar_pileg
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function list(Request $request)
	{
		$dropdown_type   = TINGKAT_DAPIL;
		$dropdown_partai = PARTAI;

		$this->pilegRepository->pushCriteria(new PilegRequestCriteria($request));

		/** @var \Illuminate\Pagination\LengthAwarePaginator $collection */
		$collection = $this->pilegRepository->paginate(10, $columns = ['*']);

		return view('pages.pilegs_list', compact('collection', 'dropdown_type', 'dropdown_partai'));
	}

	/**
	 * Show the form for creating a new Pileg.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pilegs.create');
	}

	/**
	 * Store a newly created Pileg in storage.
	 *
	 * @param CreatePilegRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePilegRequest $request)
	{
		$input = $request->all();

		$pileg = $this->pilegRepository->create($input);

		Flash::success('Pileg saved successfully.');

		return redirect(route('pilegs.index'));
	}

	/**
	 * Display the specified Pileg.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$pileg = $this->pilegRepository->findWithoutFail($id);

		if (empty($pileg)) {
			Flash::error('Pileg not found');

			return redirect(route('pilegs.index'));
		}

		return view('pilegs.show')->with('pileg', $pileg);
	}

	/**
	 * Show the form for editing the specified Pileg.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$pileg = $this->pilegRepository->findWithoutFail($id);

		if (empty($pileg)) {
			Flash::error('Pileg not found');

			return redirect(route('pilegs.index'));
		}

		return view('pilegs.edit')->with('pileg', $pileg);
	}

	/**
	 * Update the specified Pileg in storage.
	 *
	 * @param  int $id
	 * @param UpdatePilegRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatePilegRequest $request)
	{
		$pileg = $this->pilegRepository->findWithoutFail($id);

		if (empty($pileg)) {
			Flash::error('Pileg not found');

			return redirect(route('pilegs.index'));
		}

		$pileg = $this->pilegRepository->update($request->all(), $id);

		Flash::success('Pileg updated successfully.');

		return redirect(route('pilegs.index'));
	}

	/**
	 * Remove the specified Pileg from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$pileg = $this->pilegRepository->findWithoutFail($id);

		if (empty($pileg)) {
			Flash::error('Pileg not found');

			return redirect(route('pilegs.index'));
		}

		$this->pilegRepository->delete($id);

		Flash::success('Pileg deleted successfully.');

		return redirect(route('pilegs.index'));
	}
}
