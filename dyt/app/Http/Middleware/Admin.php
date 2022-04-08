<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Sentinel;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next) {
        if (!Sentinel::check()) {
            return redirect()->route('getLogin');
            
        } else {

            if (Sentinel::inRole('admin')) {

                $onuser = Sentinel::getUser();
                view()->share('onuser', $onuser);
            } else {
                return redirect()->route('getLogin');

            }
            return $next($request);

        }
    }
}


