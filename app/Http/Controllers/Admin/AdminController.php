<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function managerUser()
    {
        $users = User::with('role')->get();
        $usersRole = Auth::user();
        $roleName = $usersRole->role->name;
        return view('admin.managerUser.manager', compact('users', 'roleName'));
    }
    public function showCreate()
    {
        $roles = Role::all();
        return view('admin.managerUser.create', compact('roles'));
    }

    public function register(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            User::create([
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'role_id' => $request->role_id,
            ]);

            return redirect()->route('auth.login')
                ->with('success', 'Tạo tài khoản thành công.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }

    // public function update(Request $request, $id)
    // {
    //     $manager_dp = Manager_dp::findOrFail($id);

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'password' => 'nullable|string|min:8|confirmed',
    //         'role_id' => 'required|exists:roles,id',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     try {
    //         // Dữ liệu cập nhật
    //         $data = [
    //             'name' => $request->name,
    //             'role_id' => $request->role_id,
    //         ];

    //         // Chỉ cập nhật password nếu có giá trị mới
    //         if ($request->filled('password')) {
    //             $data['password'] = Hash::make($request->password);
    //         }

    //         $manager_dp->update($data);

    //         return redirect()->route('admin.manager.index')
    //             ->with('success', 'Cập nhật tài khoản thành công.');

    //     } catch (\Exception $e) {
    //         return redirect()->back()
    //             ->with('error', 'Có lỗi xảy ra khi cập nhật tài khoản.')
    //             ->withInput();
    //     }
    // }

    public function showDashboard()
    {
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->back()->with('error', 'cần phải đăng nhập để truy cập');
        }
        $roles = Role::all();
        $roleName = $user->role->name;
        return view('admin.pages.dashboard', compact('roles', 'roleName', 'user'));
    }

    public function showCreateRole()
    {
        $user = Auth::user();
        $roles = Role::all();
        $roleName = $user->role->name;
        return view('admin.managerUser.createRole', compact('roleName'));
    }

    public function createRole(Request $request)
    {
        $roles = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($roles->fails()) {
            return redirect()->back()
                ->withErrors($roles)
                ->withInput();
        }

        try {
            // Tạo mới user sử dụng create thay vì instance mới
            Role::create([
                'name' => $request->name,
            ]);

            return redirect()->route('dashboardView')->with('success', 'Thêm chức vụ thành công');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ')
                ->withInput();
        }

    }
}


