<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles authenticating users for the application and
	| redirecting them to your home screen. The controller uses a trait
	| to conveniently provide its functionality to your applications.
	|
	*/

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	protected function attemptLogin(Request $request)
	{
		if ( ! $this->guard()->attempt($this->credentials($request), $request->filled('remember'))) {
			return $this->sendFailedAdminLoginResponse($request);
		}

		return $this->guard()->attempt(
			$this->credentials($request), $request->filled('remember')
		);
	}

	/**
	 * Also check if user is administrator.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return array
	 */
	protected function credentials(Request $request)
	{
		return array_merge($request->only($this->username(), 'password'), ['is_admin' => 1]);
	}

	protected function sendFailedAdminLoginResponse(Request $request)
	{
		throw ValidationException::withMessages([
			$this->username() => [trans('auth.failed_admin')],
		]);
	}
}
