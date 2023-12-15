<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
     
    public function showLinkRequestForm()
    {
        return view('client.layouts.auth.forgot_pass');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $customMessages = [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.exists' => 'Email chưa được đăng ký!',
        ];
        
        // Validate dữ liệu với các thông báo tùy chỉnh
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ], $customMessages);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
 
        $status = Password::sendResetLink(
            $request->only('email')
        );
 
        return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }

    public function resetLinkEmail(Request $request, string $token)
    {
        return view('client.layouts.auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $customMessages = [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập nội dung.',
            'password.min' => 'Vui lòng nhập tối thiểu 6 ký tự',
            'password.confirmed' => 'Vui lòng kiểm tra lại mật khẩu.',
        ];
        
        // Validate dữ liệu với các thông báo tùy chỉnh
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ], $customMessages);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');
        $token = $request->input('_token');

        $requestData = [
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $passwordConfirmation,
            'remember_token' => $token,
        ];

        // $status = Password::reset(
        //     $requestData,
        //     function (User $user, string $password) {
        //         $user->forceFill([
        //             'password' => Hash::make($password)
        //         ])->setRememberToken(Str::random(60));

        //         $user->save();

        //         event(new PasswordReset($user));
        //     }

        //     // function (User $user, string $password) {
        //     //     $user->forceFill([
        //     //         'password' => Hash::make($password),
        //     //         'remember_token' => Str::random(60),
        //     //     ]);

        //     //     $user->save();

        //     //     event(new PasswordReset($user));
        //     // }
        // );
     
        // return $status === Password::PASSWORD_RESET
        //             ? redirect()->route('customer.login-page')->with('status', __($status))
        //             : back()->withErrors(['email' => [__($status)]]);

           User::where('email', $email)->update([
            'password'=>Hash::make($password),
            'remember_token' => Str::random(60),
           ]); 
           return redirect()->route('customer.login-page');
    }
}
