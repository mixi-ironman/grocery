<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\Home\CartController;


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

//Home
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/load-product',[HomeController::class,'loadProduct'])->name('loadproduct');
Route::post('danhmuc/{id}-{slug}.html',[MenuController::class,'index'])->name('index');
//view product
Route::get('/product/{id}-{slug}.html',[ProductController::class,'index'])->name('view-product');
//add cart
Route::get('products/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add-to-cart');
//show cart
Route::get('products/show-cart',[CartController::class,'showCart'])->name('show-cart');
//update cart
Route::get('products/update-cart',[CartController::class,'updateCart'])->name('update-cart');
//delete cart
Route::get('products/delete-cart',[CartController::class,'deleteCart'])->name('delete-cart');







    // Route::get('/home',[HomeController::class,'index'])->name('home');
    // Route::get('/logout',[HomeController::class,'logout'])->name('customer-logout');
    // Route::get('/category/{id}',[HomeController::class,'showCategoryItems'])->name('category');
    // Route::get('/product',[HomeController::class,'getAll'])->name('all-product');
    // Route::get('/product/{id}',[HomeController::class,'productDetail'])->name('view-product');
    // Route::post('/search',[HomeController::class,'search'])->name('search');
    // Route::get('/add-to-cart',[CartController::class,'add'])->name('add-to-cart');


