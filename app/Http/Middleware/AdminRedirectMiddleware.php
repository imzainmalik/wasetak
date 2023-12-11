<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $data = Auth::guard('admin')->user();
        if($data){
            return redirect()->route('dashboard');
        }
        return $next($request);
        // if (Auth::guard('admin')->check() && $request->routeIs('login')) {
        //     return redirect()->route('dashboard');
        // }
        // elseif (!Auth::guard('admin')->check() && ($request->routeIs('dashboard'))) {
        //     return redirect()->route('login');
        // }
        // return $next($request);
    }
}
