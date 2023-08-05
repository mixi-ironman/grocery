<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\OrderDetailController;



// Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('index');
// });

//Categories
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

//Product
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

//sliders
Route::prefix('sliders')->name('sliders.')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('index');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/store', [SliderController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [SliderController::class, 'destroy'])->name('destroy');
});

//Product

Route::prefix('product')->name('product.')->group(function () {

    Route::get('/', [ProductImageController::class, 'index'])->name('images.index');
    Route::get('images/create', [ProductImageController::class, 'create'])->name('images.create');
    Route::post('images/store', [ProductImageController::class, 'store'])->name('images.store');
    Route::get('images/edit/{id}', [ProductImageController::class, 'edit'])->name('images.edit');
    Route::put('images/update/{id}', [ProductImageController::class, 'update'])->name('images.update');
    Route::delete('images/destroy/{id}', [ProductImageController::class, 'destroy'])->name('images.destroy');


    // Route::get('images/{id}', [ProductImageController::class, 'show'])->name('product.image.show');
    // Cập nhật hình ảnh sản phẩm
    // Route::put('images/{id}', [ProductImageController::class, 'update'])->name('product.image.update');
    // // Xóa hình ảnh sản phẩm
    // Route::delete('images/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
});

//Order
Route::prefix('order')->name('order.')->group(function () {
    Route::get('/', [OrderDetailController::class, 'index'])->name('index');
    Route::get('view-order/{id}',[OrderDetailController::class,'show'])->name('view');
    Route::delete('/destroy/{id}', [OrderDetailController::class, 'destroy'])->name('destroy');
});

