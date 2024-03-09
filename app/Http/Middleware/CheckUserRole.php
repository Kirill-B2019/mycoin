<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckUserRole
{
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $role)
	{
		if (!auth()->user()->hasRole($role)) {
			return Redirect::route('cabinet.main')->with('status', 'Не Ваша роль');
		}
		return $next($request);
	}
}
