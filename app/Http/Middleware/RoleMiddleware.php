<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard="panel",$role='admin')
    {
        if(!$request->user($guard)->hasRole($role)){
            return redirect()->back()->with('error', "You are not authenticated user.");
        }

        return $next($request);
    }
}
