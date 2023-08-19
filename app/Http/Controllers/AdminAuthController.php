<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AdminAuthController extends Controller
{
    public function viewLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        $user = Auth::guard('admin')->attempt($credential);
        // $user = Auth::guard('admin')->attempt($request->only('username','password'));

        if ($user) {
            return redirect()->route('categories.index'); 
        } else {
            return redirect()->back()->withErrors(['login' => 'Sai tài khoản hoặc mật khẩu'])->withInput();
        }
    }
}

