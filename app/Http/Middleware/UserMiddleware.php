<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('UserCheck') && ($request->path() != 'login' && $request->path() != 'register'))
        {
            return redirect()->route('login')->with('errorMsg', 'User must be login');
        }   

        if(session()->has('UserCheck') && ($request->path() == 'login' || $request->path() == 'register')){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
