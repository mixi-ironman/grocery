<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

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
Route::get('/',[HomeController::class,'index']);
Route::post('/load-product',[HomeController::class,'loadProduct'])->name('loadproduct');
Route::post('danhmuc/{id}-{slug}.html',[MenuController::class,'index'])->name('index');

Route::get('/product/{id}',[HomeController::class,'productDetail'])->name('view-product');

    // Route::get('/home',[HomeController::class,'index'])->name('home');
    // Route::get('/logout',[HomeController::class,'logout'])->name('customer-logout');
    // Route::get('/category/{id}',[HomeController::class,'showCategoryItems'])->name('category');
    // Route::get('/product',[HomeController::class,'getAll'])->name('all-product');
    // Route::get('/product/{id}',[HomeController::class,'productDetail'])->name('view-product');
    // Route::post('/search',[HomeController::class,'search'])->name('search');
    // Route::get('/add-to-cart',[CartController::class,'add'])->name('add-to-cart');
    // Route::get('/view-cart',[CartController::class,'index'])->name('view-cart');


