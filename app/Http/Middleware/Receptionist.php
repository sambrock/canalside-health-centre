<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Receptionist
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

        if ( Auth::check() && Auth::user()->role == "Receptionist" )
        {
            return $next($request);
        }
        return back();
    }
}
