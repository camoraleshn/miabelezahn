<?php

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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/', 'HomeController@home')->name('home');


// frontend routes
Route::get('/product/{product}', 'ProductController@view')->name('product.view');
Route::post('/product/search', 'ProductController@search')->name('product.search');
Route::get('/product/{brand}', 'ProductController@brand')->name('product.brand');
Route::get('/cart/show', 'CartController@show')->name('cart.show');
Route::get('/cart/addtocart/{slug}', 'CartController@addtocart')->name('addtocart');
Route::post('/cart/pushtocart', 'CartController@pushtocart')->name('pushtocart');
Route::get('/cart/getcart', 'CartController@getCart')->name('getcart');
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout');


// backend routes

Route::get('/login', 'LoginController@login');
Route::get('backend/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('backend/types', 'TypesController');
Route::resource('backend/objects', 'ObjectController');
Route::resource('backend/brands', 'BrandController');
// Route::get('/welcome', function() { return view('welcome') });

