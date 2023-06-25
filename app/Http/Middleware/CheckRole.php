<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
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
        $allowedRoles = explode('|', $roles);

        if (Auth::check() && in_array(Auth::user()->roles, $allowedRoles)) 
        {
            return $next($request);
        }

        return redirect('/');
        /*if ((Auth::check() && (Auth::user()->roles === "admin")))
        {
            return $next($request);
        }
        else if((Auth::check() && (Auth::user()->roles === "student") ))
        {
            return $next($request);
        }
        else if((Auth::check() && Auth::user()->roles == "user") )
        {
            return redirect('/');
        }*/
        
    }
}
