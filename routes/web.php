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



Route::get('/','Product\ProductController@index');
Route::post('/searchproducts','Product\ProductController@search');

Route::get('cart', 'ProductsController@cart');
Route::get('add-to-cart/{$id}','Product\ProductController@addtoCart');

Route::post('filters','ProductsController@filters');


Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');