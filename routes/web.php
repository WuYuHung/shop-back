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
    Route::get('/user/create','UsersController@create')->name('user.create');
    Route::delete('/user/{user}','UsersController@destroy')->name('user.destroy');
    Route::post('/user/{user}','UsersController@edit')->name('user.update');
    Route::post('/user','UsersController@store')->name('user.store');

    Route::get('/product', 'ProductsController@index')->name('product');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
