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
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/', 'UsersController@index')->name('index');
        Route::get('/create','UsersController@create')->name('create');
        Route::delete('/{user}','UsersController@destroy')->name('destroy');
        Route::post('/{user}','UsersController@edit')->name('update');
        Route::post('/','UsersController@store')->name('store');
    });
    Route::prefix('order')->name('order.')->group(function(){
        Route::get('/', 'OrdersController@index')->name('index');
        Route::delete('/{order}','OrdersController@destroy')->name('destroy');
        Route::post('/{order}','OrdersController@edit')->name('update');
        Route::get('/{id}','OrdersController@show')->name('show');
    });
    Route::prefix('coupon')->name('coupon.')->group(function(){
       Route::get('/','CouponsController@index')->name('index');
       Route::get('/create','CouponsController@create')->name('create');
       Route::post('/','CouponsController@store')->name('store');

    });

    Route::get('/product', 'ProductsController@index')->name('product');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
