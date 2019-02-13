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

Route::get('/', [
    'uses' => 'productsController@index',
    'as' => 'product.index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addToCart/{id}', [
    'uses' => 'productsController@addTocart',
    'as' => 'product.addToCart'
]);

Route::get('/shoppingCart', [
    'uses' => 'productsController@shoppingCart',
    'as' => 'product.shoppingCart'
]);