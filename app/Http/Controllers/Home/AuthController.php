<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
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
        $customMessages = [
            'email.required' => 'Vui lòng nhập thông tin !',
            'password.required' => 'Vui lòng nhập thông tin !',
        ];
        
        // Validate dữ liệu với các thông báo tùy chỉnh
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ], $customMessages);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Kiểm tra dữ liệu đầu vào
        $credentials = $request->only('email', 'password');
        // Thử đăng nhập
        if (Auth::attempt($credentials, $request->remember)) {
            $user = Auth::user();
            if ($user->status != 1) {
                // Trường hợp tài khoản đã bị khóa
                Auth::logout(); // Đăng xuất người dùng
                return redirect()->route('customer.login-page')->withErrors(['message' => 'Tài khoản của bạn nằm trong danh sách chặn của shop!']);
            }
    
            if ($user->status == 1) {
                // Trường hợp là người dùng bình thường
                return redirect()->route('home');
            } 
        } else {
            return redirect()->route('customer.login-page')->withErrors(['message' => 'Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập!']);
        }
    }

    //Register
    public function register(Request $request)
    {

        $customMessages = [
            'email.required' => 'Vui lòng nhập thông tin !',
            'username.required' => 'Vui lòng nhập thông tin !',
            'username.alpha_dash' => 'Vui lòng nhập tên không chứa ký tự đặc biệt!',
            'email.unique' => 'Email đã tồn tại!',
            'password.required' => 'Vui lòng nhập thông tin !',
            'username.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'username.max' => 'Vui lòng nhập tối đa 12 ký tự !',
            'password.min' => 'Vui lòng nhập tối thiểu 5 ký tự !',
            'password.max' => 'Vui lòng nhập tối đa 12 ký tự !',
        ];
        
        // Validate dữ liệu với các thông báo tùy chỉnh
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:5|max:20', 
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:12',
        ], $customMessages);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Kiểm tra xem email đã tồn tại chưa
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            // Tạo tài khoản người dùng mới
            $customer = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
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

// INSERT INTO locations (name, parent_id, type)
// VALUES
// ('Phường Hạ Đình', 10, 3),
// ('Phường Kim Giang', 10, 3),
// ('Phường Khương Đình', 10, 3),
// ('Phường Khương Mai', 10, 3),
// ('Phường Khương Trung', 10, 3),
// ('Phường Nhân Chính', 10, 3),
// ('Phường Phương Liệt', 10, 3),
// ('Phường Thanh Xuân Bắc', 10, 3),
// ('Phường Thanh Xuân Nam', 10, 3),
// ('Phường Thanh Xuân Trung', 10, 3),
// ('Phường Thượng Đình', 10, 3);