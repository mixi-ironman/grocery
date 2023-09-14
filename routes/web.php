<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Home\AuthController;
use App\Http\Controllers\Home\PaymentController;
use App\Http\Controllers\Home\UserController;





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
        Route::get('/login-page',[AuthController::class,'loginForm'])->name('login-page');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
        Route::get('/register-page',[AuthController::class,'registerForm'])->name('register-page');
        Route::post('/register',[AuthController::class,'register'])->name('register');
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');
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

    //Category
    Route::get('category/{id}-{slug}.html',[CategoryController::class,'index'])->name('category-product');
    // -----------------

    //cart
    Route::prefix('cart')->group(function () {
        Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
        Route::get('/show-cart',[CartController::class,'showCart'])->name('show-cart');
        Route::post('/clear-cart',[CartController::class,'clearCart'])->name('clear-cart');
        Route::get('/update-cart',[CartController::class,'updateCart'])->name('update-cart');
        Route::get('/delete-cart',[CartController::class,'deleteCart'])->name('delete-cart');
        Route::post('/apply-coupon',[CartController::class,'applyCoupon'])->name('apply-coupon');

        //checkout 
        Route::get('/check-out',[CartController::class,'checkout'])->name('check-out');
        Route::post('/check-out-cash',[CartController::class,'addOrderCash'])->name('confirm-check-out');
    });

    // Route xử lý thanh toán bằng tiền mặt
    Route::post('/checkout-cash', 'PaymentController@checkoutCash');
    // Route xử lý thanh toán online
    Route::post('/checkout-online', 'PaymentController@checkoutOnline');
    // --------------------

    Route::get('vnpay',[PaymentController::class,'vnpay'])->name('vnpay');
    Route::get('vnpay-return',[PaymentController::class,'vnpayReturn'])->name('vnpay-return');

//customer
Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('profile');
    Route::get('/view-order/{id}',[UserController::class,'viewOrder'])->name('view-order');
    Route::post('/profile',[UserController::class,'store'])->name('store');
    Route::put('/update/{id}',[UserController::class,'update'])->name('update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::put('/address-default', [UserController::class, 'setDefaultAddress'])->name('address-default');
});
