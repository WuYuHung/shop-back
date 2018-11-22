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

Route::get('/', 'Controller@index2');

Route::get('/index', 'Controller@index')->name('index');

Route::get('/login', 'Controller@index2');

Route::get('/user', 'UsersController@index')->name('user');

Route::get('/product', 'ProductsController@index')->name('product');
Route::middleware('auth')->group(function() {
});

