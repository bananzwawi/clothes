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



Route::get('/', 'Pagescontroller@index')->name('index');

Route::get('/cart', 'Pagescontroller@cart')->name('cart');

Route::get('/checkout','Pagescontroller@checkout')->name('checkout');

Route::get('/contact', 'Pagescontroller@contact')->name('contact');

Route::get('/log', 'Pagescontroller@log')->name('log');

Route::get('/my-account', 'Pagescontroller@my_account')->name('my-account');

Route::get('/product-detail', 'Pagescontroller@product_detail')->name('product-detail');

Route::get('/product-list', 'Pagescontroller@product_list')->name('product-list');

Route::get('/wishlist', 'Pagescontroller@wishlist')->name('wishlist');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
