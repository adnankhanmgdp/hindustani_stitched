<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::view('/about-us', 'about-us');
Route::view('/contact-us', 'contact-us');
Route::view('/blog', 'blog');
Route::view('/checkout', 'checkout');
Route::view('/faqs', 'faqs');
Route::view('/my-account', 'my-account');
Route::view('/view-product', 'product-detail');
Route::view('/return-policy', 'returns-exchanges');
Route::view('/shop', 'shop');
Route::view('/collections', 'shop-collection');
Route::view('/store-location', 'store-location');
Route::view('/terms-and-conditions', 'terms-conditions');
Route::view('/wishlist', 'wishlist');
Route::view('/size-guide', 'size-guide');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
