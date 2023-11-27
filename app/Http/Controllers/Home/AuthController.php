<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
   
    public function loginForm() 
    { 
        return view('client.layouts.auth.login'); 
    }

    public function registerForm() 
    { 
        return view('client.layouts.auth.register'); 
    }

    //Login
    public function login(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $credentials = $request->only('email', 'password');
        // Thử đăng nhập
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();
            if ($user->status != 1) {
                // Trường hợp tài khoản đã bị khóa
                Auth::logout(); // Đăng xuất người dùng
                return redirect()->route('customer.login-page')->withErrors(['message' => 'Tài khoản của bạn nằm trong danh sách khóa của shop!']);
            }
    
            if ($user->status == 1) {
                // Trường hợp là người dùng bình thường
                return redirect()->route('home');
            } 
        } else {
            // Đăng nhập thất bại
            return redirect()->route('customer.login-page')->withErrors(['message' => 'Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập!']);
        }
    }

    //Register
    public function register(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|min:6|max:30|alpha',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|max:20',
        // ]);

        // if($request->hasFile('avatar'))
        // {
        //     $file = $request->file('avatar');
        //     $destination_Path = public_path('image/avatar');
        //     $file_Name = time().'_'.$file->getClientOriginalName();
        //     $file->move($destination_Path, $file_Name);
        // }else{
        //     $file_Name = "default-user.png";
        // }

        // Kiểm tra xem email đã tồn tại chưa
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            // Tạo tài khoản người dùng mới
            $customer = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect()->route('customer.login-page')->with('msg', 'Bạn đã tạo tài khoản thành công');
        } else {
            // Email đã tồn tại
            return redirect()->back()->withErrors(['email' => 'Email đã tồn tại'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home'); 
        // tbl_province(province_id,province_name),tbl_district(dist_id,province_id,dist_name),tbl_ward(ward_id,dist_id,ward_name) đây nhé
    }

}
