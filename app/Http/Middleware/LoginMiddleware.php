<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (!Auth::guard(name: 'user')->check()) {
            // Redirect to admin login if not authenticated
            return response()->view('login');
        }

        // Proceed to the next request if authenticated
        return $next($request);

        // If not authenticated, redirect to login

    }
}
