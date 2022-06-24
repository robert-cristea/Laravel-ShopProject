<?php

namespace App\Http\Middleware;

use App\Model\Project;
use Closure;
use Illuminate\Support\Facades\Auth;

class ProjectMiddleware
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
        if(Project::find($request->id)->user_id != Auth::id()) {
            return redirect("/");
        } 
        return $next($request);
    }
}
