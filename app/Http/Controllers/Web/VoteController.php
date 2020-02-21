<?php

namespace App\Http\Controllers\Web;

use App\Criteria\UserRegularCriteria;
use App\DataTables\VoteDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateVoteRequest;
use App\Http\Requests\UpdateVoteRequest;
use App\Models\Tps;
use App\Repositories\TpsRepository;
use App\Repositories\UserRepository;
use App\Repositories\VoteRepository;
use Flash;
use Response;

class VoteController extends AppBaseController
{
	/** @var UserRepository */
	private $userRepository;
	/** @var TpsRepository */
	private $tpsRepository;
	/** @var  VoteRepository */
	private $voteRepository;

	public function __construct(VoteRepository $voteRepo, TpsRepository $tpsRepo, UserRepository $userRepo)
	{
		$this->voteRepository = $voteRepo;
		$this->tpsRepository  = $tpsRepo;
		$this->userRepository = $userRepo;
		$this->userRepository->pushCriteria(new UserRegularCriteria());
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
		$dropdown = $this->getDropdownOptions();

		return view('votes.create', $dropdown);
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

		$dropdown = $this->getDropdownOptions();

		return view('votes.edit', $dropdown)->with('vote', $vote);
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

	protected function getDropdownOptions()
	{
		$dropdown_tps = $this->tpsRepository->get()->mapWithKeys(function ($item) {
			return [$item->id => $item->id . ' - ' . $item->name];
		});

		$dropdown_tps_opt = $this->tpsRepository->with(['user'])->get()->mapWithKeys(function ($item) {
			$options = [];
			if (isset($item->user)) {
				$options = array_add($options, 'data-user_id', $item->user->id);
			}
			$options = array_add($options, 'data-dapil_id', $item->dapil_id);

			return [$item->id => $options];
		})->toArray();

		$dropdown_user = $this->userRepository->get()->mapWithKeys(function ($item) {
			return [$item->id => $item->id . ' - ' . $item->name];
		});

		return compact('dropdown_tps', 'dropdown_tps_opt', 'dropdown_user');
	}
}
