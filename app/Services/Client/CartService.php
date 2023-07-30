<?php

namespace App\Services\Client;

use App\Repositories\Client\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CartService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function show($id)
    {
          
    }

    // public function checkOut($carts){
    //         $customer = Auth::guard('customer')->user();
    //         $mail = $customer['email'];
    //         $name = $customer['name'];
    //         Mail::send('home.mail.mail-cart',compact('customer','carts'),function($email) use($mail,$name){
    //             $email->subject('Techshop - Xác nhận đơn hàng');
    //             $email->to($mail,$name);
    //         });
    // }
  
}
