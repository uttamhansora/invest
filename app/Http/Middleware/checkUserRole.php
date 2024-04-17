<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class checkUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        
        if (Auth::check() && Auth::user()->role != 2 && Auth::user()->is_banned==2 || !Auth::guard($guards)->check()) {
            
            return redirect('/user-login')->with('error', 'You do not have permission to access this resource.');
        }

        return $next($request);
    }
}
