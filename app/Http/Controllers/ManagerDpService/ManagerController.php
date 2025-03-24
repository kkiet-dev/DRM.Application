<?php

namespace App\Http\Controllers\ManagerDpService;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Procesing;
use App\Models\Department;
use Illuminate\Http\Request;



class ManagerController extends Controller
{
    public function show()
    {
        if (!Auth::check()) {
            return redirect('/auth/login')->with('error', 'Vui lòng đăng nhập.');
        }

        $user = Auth::user();
        if (!$user || !$user->role_id) {
            return redirect('/')->with('error', 'không đủ thẩm quyền');
        }

        $roleName = $user->role->name;
        $lastCharRole = substr($roleName, -1);

        if ($roleName === 'admin') {
            $procesings = Procesing::all();
        } else {
            $procesings = Procesing::whereHas('department', function ($query) use ($lastCharRole) {
                $query->whereRaw("RIGHT(name, 1) = ?", [$lastCharRole]);
            })->get();
        }
       
        return view('admin.pages.procesing', compact('procesings', 'roleName')); 
    }
    
 
}
