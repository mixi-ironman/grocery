<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{

    public function showForm()
    {
        $carts = session()->get('cart',[]);
        $categoryList = Category::where('parent_id', 0)->get();
        return view('client.layouts.pages.contact',[
           
             'carts' => $carts,
             'categoryList'=>$categoryList,
        ]);
    }

    public function submitForm(Request $request)
    {
        // Tùy chỉnh các thông báo lỗi
        $customMessages = [
            'name.required' => 'Vui lòng nhập Họ và tên.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'message.required' => 'Vui lòng nhập nội dung.',
        ];
        
        // Validate dữ liệu với các thông báo tùy chỉnh
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], $customMessages);

        // Kiểm tra nếu có lỗi
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Lưu dữ liệu vào cơ sở dữ liệu
        Contact::create($request->all());
        return redirect()->route("contact.show-form")->with('success', 'Cảm ơn bạn đã liên hệ!');
    }

    public function aboutUs()
    {
        $carts = session()->get('cart',[]);
        $categoryList = Category::where('parent_id', 0)->get();
        return view('client.layouts.pages.about-us',[
           
             'carts' => $carts,
             'categoryList'=>$categoryList,
        ]);
    }
}
