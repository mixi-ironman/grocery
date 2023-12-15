<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminAuthController;


// Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
//     Route::get('/', [CategoryController::class, 'index'])->name('index');
// });

// Route::middleware('auth:admin')->group(function (){
Route::prefix('dashboard')->name('dashboard.')->group(function () {
Route::get('/', [DashboardController::class, 'index'])->name('index');
});

//Categories
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    Route::get('/children', [CategoryController::class, 'getChildrenByParent_id'])->name('get-children');
});

//brands
Route::prefix('brand')->name('brand.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/store', [BrandController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [BrandController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
});

//Product
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::post('upload-image', [ProductController::class, 'ckeditor_image'])->name('upload-ckeditor');
});

//Comment
Route::prefix('comments')->name('comment.')->group(function () {
    Route::delete('/destroy/{id}', [CommentController::class, 'destroy'])->name('destroy');
    Route::get('/comment', [CommentController::class, 'index'])->name('index');
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
    Route::post('upload-image', [ProductImageController::class, 'uploadImage'])->name('upload-image');
    Route::delete('images/destroy/{id}', [ProductImageController::class, 'destroy'])->name('images.destroy');
    // Route::get('images/{id}', [ProductImageController::class, 'show'])->name('product.image.show');
    // Cập nhật hình ảnh sản phẩm
    // Route::put('images/{id}', [ProductImageController::class, 'update'])->name('product.image.update');
    // // Xóa hình ảnh sản phẩm
    // Route::delete('images/{id}', [ProductImageController::class, 'destroy'])->name('product.image.destroy');
});

//Tag
Route::group(['prefix' => 'tags', 'as' => 'tags.'], function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
    Route::get('/create', [TagController::class, 'create'])->name('create');
    Route::get('/{id}', [TagController::class, 'show'])->name('show');
    Route::get('/update/{id}', [TagController::class, 'edit'])->name('edit');
    Route::post('/', [TagController::class, 'store'])->name('store');
    Route::put('/{id}', [TagController::class, 'update'])->name('update');
    // Route::post('/create-tag', [TagController::class, 'createTag'])->name('create-tag');
});

//Orderdetail
Route::prefix('order-detail')->name('order-detail.')->group(function () {
    Route::get('/', [OrderDetailController::class, 'index'])->name('index');
    Route::get('view-order/{id}',[OrderDetailController::class,'show'])->name('view');
    Route::delete('/destroy/{id}', [OrderDetailController::class, 'destroy'])->name('destroy');
});

//Order
Route::prefix('order')->name('order.')->group(function () {
    Route::put('/update-order-status/{id}', [OrderController::class, 'updateStatus'])->name('update-order-status');
});

//Coupon
Route::prefix('coupons')->name('coupons.')->group(function () {
    Route::get('/', [CouponController::class, 'index'])->name('index');
    Route::get('/create', [CouponController::class, 'create'])->name('create');
    Route::post('/store', [CouponController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CouponController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CouponController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [CouponController::class, 'destroy'])->name('destroy');
});

//User
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/get-ward', [UserController::class, 'getWard'])->name('get-ward');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/lien-he', [ContactController::class, 'index'])->name('index');
    Route::delete('/destroy/{id}', [ContactController::class, 'destroy'])->name('destroy');

});


