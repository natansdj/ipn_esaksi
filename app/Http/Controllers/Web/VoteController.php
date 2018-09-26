<?php

namespace App\Http\Controllers\Web;

use App\DataTables\VoteDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateVoteRequest;
use App\Http\Requests\UpdateVoteRequest;
use App\Models\Tps;
use App\Repositories\VoteRepository;
use Flash;
use Response;

class VoteController extends AppBaseController
{
	/** @var  VoteRepository */
	private $voteRepository;

	public function __construct(VoteRepository $voteRepo)
	{
		$this->voteRepository = $voteRepo;
	}

	/**
	 * Display a listing of the Vote.
	 *
	 * @param VoteDataTable $voteDataTable
	 *
	 * @return Response
	 */
	public function index(VoteDataTable $voteDataTable)
	{
		return $voteDataTable->render('votes.index');
	}

	/**
	 * Show the form for creating a new Vote.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tps = Tps::get()->pluck('name', 'id');

		return view('votes.create', compact('tps'));
	}

	/**
	 * Store a newly created Vote in storage.
	 *
	 * @param CreateVoteRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateVoteRequest $request)
	{
		$input = $request->all();

		$vote = $this->voteRepository->create($input);

		Flash::success('Vote saved successfully.');

		return redirect(route('votes.index'));
	}

	/**
	 * Display the specified Vote.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			Flash::error('Vote not found');

			return redirect(route('votes.index'));
		}

		return view('votes.show')->with('vote', $vote);
	}

	/**
	 * Show the form for editing the specified Vote.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			Flash::error('Vote not found');

			return redirect(route('votes.index'));
		}

		return view('votes.edit')->with('vote', $vote);
	}

	/**
	 * Update the specified Vote in storage.
	 *
	 * @param  int $id
	 * @param UpdateVoteRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateVoteRequest $request)
	{
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			Flash::error('Vote not found');

			return redirect(route('votes.index'));
		}

		$vote = $this->voteRepository->update($request->all(), $id);

		Flash::success('Vote updated successfully.');

		return redirect(route('votes.index'));
	}

	/**
	 * Remove the specified Vote from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$vote = $this->voteRepository->findWithoutFail($id);

		if (empty($vote)) {
			Flash::error('Vote not found');

			return redirect(route('votes.index'));
		}

		$this->voteRepository->delete($id);

		Flash::success('Vote deleted successfully.');

		return redirect(route('votes.index'));
	}
}
