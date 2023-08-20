<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\AdminAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('client.layouts.master_layout');
    
});

Route::get('admin/login',[AdminAuthController::class,'viewLogin'])->name('admin-login');
Route::post('admin/login',[AdminAuthController::class,'login'])->name('admin-auth');


Route::get('admin/logout', function () {
    return view('admin.auth.logout');
    
});

//Home
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/load-product',[HomeController::class,'loadProduct'])->name('load-product');
Route::get('/autocomplete-ajax',[HomeController::class,'autocompleteAjax'])->name('autocomplete-ajax');
Route::get('/category-product',[HomeController::class,'viewCategory'])->name('viewCategory');

//Product
Route::get('/product/{id}-{slug}.html',[ProductController::class,'index'])->name('view-product');
Route::get('/load-comment',[ProductController::class,'loadComment'])->name('load-comment');
Route::post('/send-comment',[ProductController::class,'sentComment'])->name('send-comment');
// ---------------

Route::post('danhmuc/{id}-{slug}.html',[MenuController::class,'index'])->name('index');

// -----------------

//cart
Route::get('products/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
Route::get('products/show-cart',[CartController::class,'showCart'])->name('show-cart');
Route::get('products/update-cart',[CartController::class,'updateCart'])->name('update-cart');
Route::get('products/delete-cart',[CartController::class,'deleteCart'])->name('delete-cart');

//checkout 
Route::get('/check-out',[CartController::class,'checkout'])->name('check-out');
Route::post('/check-out-cash',[CartController::class,'addOrderCash'])->name('confirm-check-out');
// --------------------

// Route xử lý thanh toán bằng tiền mặt
Route::post('/checkout-cash', 'PaymentController@checkoutCash');

// Route xử lý thanh toán online
Route::post('/checkout-online', 'PaymentController@checkoutOnline');

// --------------------





