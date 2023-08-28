<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Home\AuthController;
use App\Http\Controllers\Home\PaymentController;




// --------------------------------------------------------------------
    Route::get('/home', function () {
        return view('client.layouts.master_layout');
        
    });

    // admin auth
    Route::get('admin/login',[AdminAuthController::class,'viewLogin'])->name('admin-login');
    Route::post('admin/login',[AdminAuthController::class,'login'])->name('admin-auth');
    Route::get('admin/logout',[AdminAuthController::class,'logout'])->name('admin-logout');

    //client auth
    Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/login',[AuthController::class,'loginForm'])->name('login-page');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register',[AuthController::class,'registerForm'])->name('register-page');
        Route::post('/register',[AuthController::class,'register'])->name('register');
        Route::get('/verify/{customer}/{token}',[AuthController::class,'verify'])->name('verify-account');
    });
    // --------------------

    //Home
    // Route::middleware('auth')->group(function (){
    Route::get('/',[HomeController::class,'index'])->name('home');
    // });

    Route::get('/load-product',[HomeController::class,'loadProduct'])->name('load-product');
    Route::get('/autocomplete-ajax',[HomeController::class,'autocompleteAjax'])->name('autocomplete-ajax');
    Route::get('/category-product',[HomeController::class,'viewCategory'])->name('viewCategory');

    //Product
    Route::prefix('product')->group(function (){
    Route::get('/{id}-{slug}.html',[ProductController::class,'index'])->name('view-product');
    Route::get('/load-comment',[ProductController::class,'loadComment'])->name('load-comment');
    Route::post('/send-comment',[ProductController::class,'sentComment'])->name('send-comment');
    });
    // ---------------

    //Category
    Route::get('category/{id}-{slug}.html',[CategoryController::class,'index'])->name('category-product');
    // -----------------

    //cart
    Route::get('products/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
    Route::get('products/show-cart',[CartController::class,'showCart'])->name('show-cart');
    Route::post('products/clear-cart',[CartController::class,'clearCart'])->name('clear-cart');
    Route::get('products/proxy',[CartController::class,'proxyRequest'])->name('proxy');

    Route::get('products/update-cart',[CartController::class,'updateCart'])->name('update-cart');
    Route::get('products/delete-cart',[CartController::class,'deleteCart'])->name('delete-cart');


    // --------------------

    //checkout 
    Route::get('/check-out',[CartController::class,'checkout'])->name('check-out');
    Route::post('/check-out-cash',[CartController::class,'addOrderCash'])->name('confirm-check-out');
    // --------------------

    // Route xử lý thanh toán bằng tiền mặt
    Route::post('/checkout-cash', 'PaymentController@checkoutCash');
    // Route xử lý thanh toán online
    Route::post('/checkout-online', 'PaymentController@checkoutOnline');
    // --------------------

    Route::get('vnpay',[PaymentController::class,'vnpay'])->name('vnpay');
    Route::get('vnpay-return',[PaymentController::class,'vnpayReturn'])->name('vnpay-return');



