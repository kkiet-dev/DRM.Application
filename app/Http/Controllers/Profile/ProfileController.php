<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->back()->with('error', 'cần đăng nhập để truy cập!');
        }
        $roles = Role::all();
        
        $roleName = $user->role->name;

        return view('admin.pages.profile', compact('roleName'));
    }
}
