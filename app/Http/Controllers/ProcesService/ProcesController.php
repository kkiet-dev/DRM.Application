<?php

namespace App\Http\Controllers\ProcesService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procesing;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;


class ProcesController extends Controller
{
    public function showCreate()
    {
        
        $user = Auth::user();
        if(!$user)
        {
            return redirect()->back()->with('error', 'cần đăng nhập để truy cập!');
        }
        $departments = Department::all();
        $procesings = Procesing::all();
        return view('procesingService.create', compact('departments', 'procesings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
            'file_upload' => 'required|file|mimes:pdf|max:2048',
            'department_id' => 'nullable|exists:department,id',
            'role_id'=> 'nullable|exists:users,id'
        ]);

        $filePath = $request->file('file_upload')->store('uploads', 'public');

        Procesing::create([
            'name' => $request->name,
            'email' => $request->email,
            'file_path' => $filePath,
            'message' => $request->message,
            'status' => 'approved', // Default status
            'department_id' => $request->department_id,
            'role_id' => $request->role_id,
        ]);

        return redirect()->back()->with('success', 'Đã gửi thông tin thành công!');
    }
}