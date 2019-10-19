<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class ProductMiddleware
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
        if (Session::get('product') == 1) {
            return $next($request);
        }
        return redirect('/error');
    }
}
