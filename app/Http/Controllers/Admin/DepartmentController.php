<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class DepartmentController extends Controller
{
    public function showIndex()
    {
        $user = Auth::user();

        $departments = Department::all();

        if(!$user)
        {
            return redirect()->back()->with('error', 'cần đăng nhập để truy cập');
        }

        $roles = Role::all();
        $roleName = $user->role->name;

        return view('admin.managerDepartment.manager', compact('departments','roleName','user'));
    }

    public function showCreateDepartment()
    {    
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->back()->with('error', 'cần đăng nhập để truy cập!');
        }
        $roles = Role::all();
        $roleName = $user->role->name;
        return view('admin.managerDepartment.create',  compact('roleName'));
    }

    public function createDepartment(Request $request)
    {
        $departments = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($departments->fails()) {
            return redirect()->back()
                ->withErrors($departments)
                ->withInput();
        }

        try {
            // Tạo mới user sử dụng create thay vì instance mới
            Department::create([
                'name' => $request->name,
            ]);
            return redirect()->route('department')->with('success', 'Tạo thành công');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }
}
