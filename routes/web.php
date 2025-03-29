<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserControllerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');


Route::view('/login', 'auth.login')->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::view('/register', 'auth.register')->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::put('/profile/update', [AuthController::class, 'update'])->name('profile.update');


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('success', 'Anda berhasil logout.');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Menampilkan keranjang
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add'); // Menambah produk ke keranjang
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update'); // Mengupdate jumlah produk
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove'); // Menghapus produk dari keranjang
});

Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');

Route::get('/product_detail/{slug}', [ProductController::class, 'show'])->name('product.detail');
Route::get('/product', [ProductController::class, 'index'])->name('catalog');
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product_detail', [ProductController::class, 'detail'])->name('product_detail');
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/cart', [HomeController::class, 'cart'])->name('Cart');
Route::get('/profile', [HomeController::class, 'Profile'])->name('Profile');
Route::get('/', function () {
    return view('welcome');
});
