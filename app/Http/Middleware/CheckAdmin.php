<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->user())
        {
            return redirect()->route('showLogin')->with('error', 'cần tài đăng nhập để truy cập.!');
        }

        // Kiểm tra role của user
        if ($request->user()->role->name !== 'admin') {
            return redirect()->route('dashboardView')->with('error', 'cần tài khoản admin để truy cập.!');
        }

        return $next($request);
    }
}
