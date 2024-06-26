<?php

use Illuminate\Support\Facades\Route;
use Modules\Cart\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('cart', CartController::class)->except('show')->names('cart');});
Route::view('cart/success', 'cart::success')->name('cart.success');
Route::view('cart/cancel', 'cancel')->name('cart.cancel');
Route::get('wishlist', [CartController::class , 'wishlist'])->name('wishlist');
Route::post('wishlist/{id}/create', [CartController::class , 'addToWishlist'])->name('wishlist.create');
Route::delete('wishlist/{id}/delete', [CartController::class , 'removeFromWishlist'])->name('wishlist.delete');
Route::get('myorders', [CartController::class , 'order'])->name('myorders');