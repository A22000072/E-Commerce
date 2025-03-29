<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/product_detail/{slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/product', [ProductController::class, 'index'])->name('catalog');
Route::get('/product_detail', [ProductController::class, 'detail'])->name('product_detail');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [HomeController::class, 'cart'])->name('Cart');
Route::get('/profile', [HomeController::class, 'Profile'])->name('Profile');
Route::get('/', function () {
    return view('welcome');
});
