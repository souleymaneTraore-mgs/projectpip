<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
     public function handle(Request $request, Closure $next)
    {
        if(Auth::check())

        {
            if(Auth::user()->isUer())
            {
                return redirect(route('user_dashbord'));
            }
        }
        else if(Auth::user()->isAdmin())
            
        {
            return $next($request);

        }

        abort(404);

    }

}
