<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @param null $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {


        if(!auth()->user()->hasRole($role)) {
            return Redirect::route('cabinet.main')->with('status','Не Ваша роль');
        }
        if($permission !== null && !auth()->user()->can($permission)) {
            return Redirect::route('cabinet.main')->with('status','Нет разрешения');
        }
        return $next($request);
    }
}
