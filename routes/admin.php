<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('index');
// });

Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});
