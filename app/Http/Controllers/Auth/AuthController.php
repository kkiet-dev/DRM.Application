<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Manager_dp;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            // Kiểm tra dữ liệu đầu vào
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255', // Đăng nhập bằng name
                'password' => 'required|string|min:8',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
    
            // Tìm user theo name
            $user = User::where('name', $request->name)->first();
    
            if (!$user) {
                return redirect()->back()
                    ->with('error', 'Người dùng không tồn tại')
                    ->withInput();
            }
    
            // Kiểm tra mật khẩu
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()
                    ->with('error', 'Mật khẩu không chính xác')
                    ->withInput();
            }
    
            // Đăng nhập người dùng (lưu vào session)
            Auth::login($user);
    
            // Kiểm tra xem session có lưu không
            session()->put('user_id', $user->id); // Test lưu session
            session()->put('user_name', $user->name);
    
            // Chuyển hướng đến trang dashboard hoặc trang chính
            return redirect()->route('getDepartment');
    
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Lỗi máy chủ nội bộ: ' . $e->getMessage())
                ->withInput();
        }
    }

    

    public function logout(Request $request)
    {
        try{
            Auth::logout();;
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('showLogin')->with('success', 'Đăng xuất thành công');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', 'Lỗi đăng xuất');
        }
    }
}
