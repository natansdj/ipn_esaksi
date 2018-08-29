<?php

namespace App\Http\Controllers\Web;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\User;
use App\Models\Village;
use App\Repositories\UserRepository;
use Auth;
use Flash;
use Illuminate\Http\Request;

class SaksiController extends Controller
{
	/** @var  UserRepository */
	private $userRepository;

	public function __construct(UserRepository $userRepo)
	{
		$this->userRepository = $userRepo;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		return $this->edit();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\User $user
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit()
	{
		$user = $this->userRepository->findWithoutFail(Auth::user()->id);

		if (empty($user)) {
			Flash::error('User not found');

			return redirect(route('users.index'));
		}

		$provinces = Province::get()->pluck('name', 'id');
		$regencies = Regency::get()->pluck('name', 'id');
		$districts = [];
		$villages  = [];

		return view('pages.saksi', compact('provinces', 'regencies', 'districts', 'villages'))->with('user', $user);
	}
}
