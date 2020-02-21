<?php

namespace App\Http\Controllers\Web;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
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
		$regencies = ( $user->province_id ) ? Regency::where('province_id', $user->province_id)->get()->pluck('name', 'id') : [];
		$districts = ( $user->regency_id ) ? District::where('regency_id', $user->regency_id)->get()->pluck('name', 'id') : [];
		$villages  = ( $user->district_id ) ? Village::where('district_id', $user->district_id)->get()->pluck('name', 'id') : [];

		return view('pages.saksi', compact('provinces', 'regencies', 'districts', 'villages'))->with('user', $user)->with('page_saksi', true);
	}
}
