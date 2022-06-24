<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Auth\Middleware\Particular as Middleware;

class Particular
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

        if(Auth::user()->mode != 0) {
            return redirect("/");
        }

        return $next($request);
    }

}
