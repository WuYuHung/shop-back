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

Route::middleware('auth','adminAuth')->group(function() {

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
       Route::get('/{id}','CouponsController@show')->name('show');
       Route::post('/','CouponsController@store_userCoupon')->name('user_store');

    });


    Route::prefix('products')->name('products.')->group(function (){
        Route::get('/', 'ProductsController@index')->name('index');
        Route::get('/create', 'ProductsController@create')->name('create');
        Route::post('/', 'ProductsController@store')->name('store');
        Route::get('/{id}/edit', 'ProductsController@edit')->name('edit');
        Route::patch('/{id}', 'ProductsController@update')->name('update');
    });

    Route::prefix('categories')->name('categories.')->group(function (){
        Route::get('/', 'CategoriesController@index')->name('index');
        Route::get('/create', 'CategoriesController@create')->name('create');
        Route::post('/', 'CategoriesController@store')->name('store');
        Route::get('/{id}/edit', 'CategoriesController@edit')->name('edit');
        Route::patch('/{id}', 'CategoriesController@update')->name('update');
    });


    Route::get('/home', 'HomeController@index')->name('home');
});


Auth::routes();

Route::get('sendmail', function() {
    $data = ['name' => 'Test'];
    Mail::send('welcome', $data, function($message) {
        $message->to('juck89724@gmail.com')->subject('fuck');
    });
    return 'Your email has been sent successfully!';
});
