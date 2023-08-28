<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request) 
    { 
        $validator = Validator::make($request->all(),[
            'name' => 'require',
            'password' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $remember = $request->remember;
        if (Auth::attempt(['email'=>$request['name'], 'password'=>$request['password'] ],$remember))
        {
            if(Auth::user()->status != 1)
            {
                return redirect()->route('customer.login-page')->with('msg','Bạn đã đã bị khóa');
            }

            if(Auth::user()->role == 1)
            {
                return redirect()->route('home');
            }else{
                return view('admin');
            }

        }

    }

    // public function register(Request $request) 
    // { 
    //     if($request->isMethod('post'))
    //     {
    //         $validator = Validator::make($request->all(),[
    //             'name' => 'require| min:6 | max:30 |alpha',
    //             'email' => 'required | email ',
    //             'phone' => 'required | size:10 | numberic',
    //             'password' => ' required | confirmed | min : 8 | max:20 ',
    //         ]);
    //     }

    //     if($validator->fails())
    //     {
    //         return redirect()->back()
    //                          ->withErrors($validator)
    //                          ->withInput();
    //     }

    //     if($request->hasFile('avatar'))
    //     {
    //         $file = $request->file('avatar');
    //         $destination_Path = public_path('image/avatar');
    //         $file_Name = time().'_'.$file->getClientOriginalName();
    //         $file->move($destination_Path, $file_Name);
    //     }else{
    //         $file_Name = "default-user.png";
    //     }

    //     $customer = Customer::where('email', $request_email)->first();
    //     if(!$customer)
    //     {
    //         Customer::create([
    //             'name' => $request_name,
    //             'password' => bcrypt($request->password),
    //         ]);

    //         return redirect()->route('customer.login-page')->with('msg','Bạn đã tạo tài khoản thành công');
    //     }
    // }
}
