<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('home');
//});

Route::get('/',[\App\Http\Controllers\user\UserController::class,'index'])->name('home');
Route::get('/detail/{detail}',[\App\Http\Controllers\user\UserController::class,'show'])->name('detail');

Route::get('/admin',[CategoryController::class,'index'])->name('admin');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/user', UserController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/cart', ProductController::class);
});
