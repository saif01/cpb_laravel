<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class PublishMiddleware
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
        if (Session::get('publish') == 1) {
            return $next($request);
        }
        return redirect('/error');
    }
}
