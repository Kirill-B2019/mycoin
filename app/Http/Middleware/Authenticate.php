<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
        return null;
    }

    public function handle($request, Closure $next, ...$guards)
    {
        parent::handle($request, $next, ...$guards);
        if (!Auth::check()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
