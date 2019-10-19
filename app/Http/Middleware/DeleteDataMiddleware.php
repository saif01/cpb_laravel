<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class DeleteDataMiddleware
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
        if (Session::get('delete_data')==1) {
            return $next($request);
        }
        return redirect('/error');
    }
}
