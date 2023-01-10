<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppealMiddleware
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

        if(!isset(Auth()->user()->role)){//for noname users
            return redirect()->route('start');
        }
        if ((auth()->user()->role !== 'kmr') && (Auth()->user()->role !== 'admin')) {//for all users except kmr and admin
            return redirect()->route('start');
        }
        
        return $next($request);
    }
}
