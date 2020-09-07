<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // sends admin to the correct page when they are authenticated
        if ($guard === "admin" && Auth::guard($guard)->check()) {
            // return redirect('/admin');
            return redirect('/contents');
        }
        if ($guard === "normie" && Auth::guard($guard)->check()) {
            // return redirect('/normie');
            return redirect('/restrictedContents');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        return $next($request);
    }
}
