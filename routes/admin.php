<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;


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

//Product
Route::prefix('sliders')->name('sliders.')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('index');
    Route::get('/create', [SliderController::class, 'create'])->name('create');
    Route::post('/store', [SliderController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SliderController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [SliderController::class, 'destroy'])->name('destroy');
});
