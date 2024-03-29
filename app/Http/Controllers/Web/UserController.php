<?php

namespace App\Http\Controllers\Web;

use App\DataTables\UserDataTable;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\Repositories\UserRepository;
use Flash;
use Response;

class UserController extends Controller
{
	/** @var  UserRepository */
	private $userRepository;

	public function __construct(UserRepository $userRepo)
	{
		$this->userRepository = $userRepo;
	}

	/**
	 * Display a listing of the User.
	 *
	 * @param UserDataTable $userDataTable
	 *
	 * @return Response
	 */
	public function index(UserDataTable $userDataTable)
	{
		return $userDataTable->render('users.index');
	}

	/**
	 * Show the form for creating a new User.
	 *
	 * @return Response
	 */
	public function create()
	{
		$provinces = Province::get()->pluck('name', 'id');

		return view('users.create', compact('provinces'));
	}

	/**
	 * Store a newly created User in storage.
	 *
	 * @param CreateUserRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request)
	{
		$input = $request->all();

		$user = $this->userRepository->create($input);

		Flash::success('User saved successfully.');

		return redirect(route('users.index'));
	}

	/**
	 * Display the specified User.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		return view('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified User.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$provinces = Province::get()->pluck('name', 'id');
		$regencies = ( $user->province_id ) ? Regency::where('province_id', $user->province_id)->get()->pluck('name', 'id') : [];
		$districts = ( $user->regency_id ) ? District::where('regency_id', $user->regency_id)->get()->pluck('name', 'id') : [];
		$villages  = ( $user->district_id ) ? Village::where('district_id', $user->district_id)->get()->pluck('name', 'id') : [];

		return view('users.edit', compact('provinces', 'regencies', 'districts', 'villages'))->with('user', $user);
	}

	/**
	 * Update the specified User in storage.
	 *
	 * @param  int $id
	 * @param UpdateUserRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateUserRequest $request)
	{
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$user = $this->userRepository->update($request->all(), $id);

		Flash::success('User updated successfully.');

		if ($request->get('prev_url')) {
			return redirect()->to($request->get('prev_url'));
		}

		return redirect(route('users.index'));
	}

	/**
	 * Remove the specified User from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = $this->userRepository->findWithoutFail($id);

		if (empty($user)) {
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$this->userRepository->delete($id);

		Flash::success('User deleted successfully.');

		return redirect(route('users.index'));
	}
}
