<?php

namespace App\Http\Controllers\Web;

use App\DataTables\PilpresDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePilpresRequest;
use App\Http\Requests\UpdatePilpresRequest;
use App\Repositories\PilpresRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PilpresController extends Controller
{
    /** @var  PilpresRepository */
    private $pilpresRepository;

    public function __construct(PilpresRepository $pilpresRepo)
    {
        $this->pilpresRepository = $pilpresRepo;
    }

    /**
     * Display a listing of the Pilpres.
     *
     * @param PilpresDataTable $pilpresDataTable
     * @return Response
     */
    public function index(PilpresDataTable $pilpresDataTable)
    {
        return $pilpresDataTable->render('pilpres.index');
    }

    /**
     * Show the form for creating a new Pilpres.
     *
     * @return Response
     */
    public function create()
    {
        return view('pilpres.create');
    }

    /**
     * Store a newly created Pilpres in storage.
     *
     * @param CreatePilpresRequest $request
     *
     * @return Response
     */
    public function store(CreatePilpresRequest $request)
    {
        $input = $request->all();

        $pilpres = $this->pilpresRepository->create($input);

        Flash::success('Pilpres saved successfully.');

        return redirect(route('pilpres.index'));
    }

    /**
     * Display the specified Pilpres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            Flash::error('Pilpres not found');

            return redirect(route('pilpres.index'));
        }

        return view('pilpres.show')->with('pilpres', $pilpres);
    }

    /**
     * Show the form for editing the specified Pilpres.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            Flash::error('Pilpres not found');

            return redirect(route('pilpres.index'));
        }

        return view('pilpres.edit')->with('pilpres', $pilpres);
    }

    /**
     * Update the specified Pilpres in storage.
     *
     * @param  int              $id
     * @param UpdatePilpresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePilpresRequest $request)
    {
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            Flash::error('Pilpres not found');

            return redirect(route('pilpres.index'));
        }

        $pilpres = $this->pilpresRepository->update($request->all(), $id);

        Flash::success('Pilpres updated successfully.');

        return redirect(route('pilpres.index'));
    }

    /**
     * Remove the specified Pilpres from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pilpres = $this->pilpresRepository->findWithoutFail($id);

        if (empty($pilpres)) {
            Flash::error('Pilpres not found');

            return redirect(route('pilpres.index'));
        }

        $this->pilpresRepository->delete($id);

        Flash::success('Pilpres deleted successfully.');

        return redirect(route('pilpres.index'));
    }
}
