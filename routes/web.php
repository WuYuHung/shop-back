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

Route::get('/',function (){
    return redirect()->route('login');
});

Route::middleware('auth')->group(function() {

    Route::get('/index', 'Controller@index')->name('index');

    Route::get('/user', 'UsersController@index')->name('user');

    Route::get('/product', 'ProductsController@index')->name('product');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
