<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        if($userRole === 'admin'){
            // return redirect()->route('admin');
            return $next($request);
        }

        if($userRole === 'lad'){
            return redirect()->route('lad');
        }

        if($userRole === 'user'){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');

    }
}
