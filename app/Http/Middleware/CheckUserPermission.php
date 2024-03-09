<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckUserPermission {
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $permission) {
		if($permission !== null && !auth()->user()->hasPerm($permission)) {
			
			return Redirect::route('cabinet/main')->with('status','Нет разрешения');
		}
		return $next($request);
	}
}
