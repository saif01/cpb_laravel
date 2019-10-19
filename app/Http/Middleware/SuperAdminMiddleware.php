<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('super') == 1) {
            return $next($request);
        }
        return redirect('/error');
    }
}
