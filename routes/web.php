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
    return view('welcome');
});

Route::get('/customers/{customerId}', 'CustomerController@edit');
Route::put('/customers/{customer}', 'CustomerController@update');

Route::post('/products', 'ProductController@store');
Route::put('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@delete');
Route::get('/products/{product}', 'ProductController@get');
Route::get('/products', 'ProductController@index');

Route::post('/orders', 'OrderController@store');
Route::put('/orders/{order}', 'OrderController@update');
Route::get('/orders/{order}', 'OrderController@get');
Route::get('/orders', 'OrderController@index');

Route::get('/customers/{customer}/orders', 'CustomerController@orders');
