<?php
	namespace App\Http\Middleware;
	
	use Closure;
	use Illuminate\Support\Facades\Redirect;
	
	class CheckUserRole
	{
		/**
		 * Handle the incoming request.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param \Closure                 $next
		 * @param string                   $role
		 * @return mixed
		 */
		public function handle($request, Closure $next, $role): mixed
		{
			{
				if (!$request->user()->hasRole($role)) {
					return Redirect::route('cabinet.main')->with('status', 'Нет разрешения');
				}
				
				return $next($request);
			}
			
		}
	}