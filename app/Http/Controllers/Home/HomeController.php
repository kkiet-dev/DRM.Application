<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function showHome()
    {
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->back()->with('error', 'cần đăng nhập để truy cập!');
        }
        $roleName = $user->role->name;

        return view('admin.home', compact('roleName'));
    }
}
