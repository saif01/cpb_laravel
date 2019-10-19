<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class AboutMiddleware
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
        if ( Session::get('about') == 1) {
            return $next($request);
        }
        return redirect('/error');
    }
}
