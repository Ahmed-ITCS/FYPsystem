<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$roles)
    {
        if (Auth::check() && Auth::user()->roles == "admin") 
        {
            return $next($request);
        }
        else if((Auth::check() && Auth::user()->roles == "student") )
        {
            return response()->view('dashboard1');
        }
        else
        {
            return response()->view('dashboard1');
        }
        
    }
}
