<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Silber\Bouncer\BouncerFacade as Bouncer;

class GlobalAdminMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = null)
	{
		if (Auth::guard($guard)->guest()) {
			if ($request->ajax() || $request->wantsJson()) {
				return response('Unauthorized', 401);
			} else {
				return redirect()->guest('/login');
			}
		} else {
			$user    = Auth::user();
			$isAdmin = ( $user->is_admin && $user->is_admin == 1 );

			if ( ! $isAdmin) {
				if ($request->ajax() || $request->wantsJson()) {
					return response('Unauthorized', 401);
				} else {
					return redirect()->route('dashboard');
				}
			}
		}

		return $next($request);
	}
}
