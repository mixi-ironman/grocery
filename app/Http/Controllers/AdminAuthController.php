<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function viewLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $customMessages = [
            'username.required' => 'Vui lòng nhập thông tin !',
            'username.alpha_dash' => 'Vui lòng nhập tên không chứa ký tự đặc biệt!',
            'password.required' => 'Vui lòng nhập thông tin !',
            'password.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'password.max' => 'Vui lòng nhập tối đa 12 ký tự !',
        ];

        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5|max:20|alpha_dash', // kiểm tra độ dài, chỉ chấp nhận chữ cái, số, và dấu gạch dưới
            'password' => 'required|min:5|max:12',
            // 'remember' => 'boolean', // Nếu có checkbox "Nhớ Đăng Nhập"
        ],$customMessages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::guard('admin')->attempt($request->only('username','password'));
        if ($user) {
            return redirect()->route('categories.index'); 
        } else {
            return redirect()->back()->withErrors(['login' => 'Sai tài khoản hoặc mật khẩu'])->withInput();
        }
    }

    public function registerForm() 
    { 
        return view('admin.auth.register'); 
    }

    public function register(Request $request)
    {
        $customMessages = [
            'name.required' => 'Vui lòng nhập thông tin !',
            'username.required' => 'Vui lòng nhập thông tin !',
            'username.alpha_dash' => 'Vui lòng nhập tên không chứa ký tự đặc biệt!',
            'username.unique' => 'Tài khoản đã tồn tại!',
            'password.required' => 'Vui lòng nhập thông tin !',
            'username.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'username.max' => 'Vui lòng nhập tối đa 12 ký tự !',
            'name.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'name.max' => 'Vui lòng nhập tối đa 12 ký tự !',
            'password.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'password.max' => 'Vui lòng nhập tối đa 12 ký tự !',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|max:20',
            'username' => 'required|min:5|max:20|alpha_dash|unique:admins,username,', // kiểm tra độ dài, chỉ chấp nhận chữ cái, số, và dấu gạch dưới
            'password' => 'required|min:5|max:12',
            // 'remember' => 'boolean', // Nếu có checkbox "Nhớ Đăng Nhập"
        ],$customMessages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Kiểm tra xem email đã tồn tại chưa
        // $user = Admin::where('username ', $request->username )->first();
        // if (!$user) {
            // Tạo tài khoản người dùng mới
            $admin = Admin::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->route('admin-login')->with('msg', 'Bạn đã tạo tài khoản thành công');
        // } else {
        //     // Email đã tồn tại
        //     return redirect()->back()->withErrors(['account' => 'Tài khoản đã tồn tại'])->withInput();
        // }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin-login'); 
    }
}

