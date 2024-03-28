<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Lad
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

        if($userRole === 'lad'){
            // return redirect()->route('lad');
            return $next($request);
        }

        if($userRole === 'admin'){
            return redirect()->route('admin');
        }

        if($userRole === 'user'){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }
}
