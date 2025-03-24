<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Procesing;

class CheckRoleManagerDp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $roleId = session('role_id');

        // Kiểm tra xem có bản ghi nào trong processing_infor có depament_id khớp với role_id không
        $hasAccess = Procesing::where('role_id', $roleId)->exists();

        if ($hasAccess) {
            return $next($request);
        }

        return redirect('/')->with('error', 'You do not have permission to access this page.');
    
    }
}
