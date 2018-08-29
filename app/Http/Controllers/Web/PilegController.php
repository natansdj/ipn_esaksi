<?php

namespace App\Http\Controllers\Web;

use App\DataTables\PilegDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePilegRequest;
use App\Http\Requests\UpdatePilegRequest;
use App\Repositories\PilegRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PilegController extends Controller
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

	public function list()
	{
		return view('pages.pilegs_list');
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
