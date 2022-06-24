<?php

namespace App\Http\Middleware;

use App\Model\Order;
use Closure;
use Illuminate\Support\Facades\Auth;

class OrderMiddleware
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
        if(Order::find($request->id)->user_id != Auth::id()) {
            return redirect("/");
        }
        return $next($request);
    }
}
