<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/product-detail', [App\Http\Controllers\ProductDetailController::class, 'index'])->name('product');  // RESTFUL API Convension for detail view

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');

// routes/web.php

use Illuminate\Support\Facades\Auth;

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'show']);
