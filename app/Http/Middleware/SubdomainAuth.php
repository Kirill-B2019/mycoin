<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SubdomainAuth
{
    /**
     * Handle an incoming request to make sure that a valid user is logged in.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $user = Auth::user();
        if ($user == null) {
            return redirect('/login');
        }
        return $next($request);
    }
}
