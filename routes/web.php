<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StripePaymentController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [ProductsController::class, 'index'])->name('products');
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');
Route::get('product_detail/{id}', [ProductsController::class, 'product_detail']);
Route::get('product_shop', [ProductsController::class, 'product_shop']);


Route::get('/home' , [CustomAuthController::class, 'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



// Route::get('/checkout{total}', 'App\Http\Controllers\StripeControllrer@index')->name('checkout');
// Route::post('/session/{total}', 'App\Http\Controllers\StripeControllrer@session')->name('session');
// Route::get('/success', 'App\Http\Controllers\StripeControllrer@success')->name('success');



Route::get('stripe/{total}',[StripePaymentController::class,'paymentStripe'])->name('addmoney.paymentstripe');
Route::post('add-money-stripe',[StripePaymentController::class,'postPaymentStripe'])->name('addmoney.stripe');
