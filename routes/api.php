<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','Api\AuthController@register');
Route::post('login','Api\AuthController@login');

Route::middleware('auth:api')->group(function()
{
    Route::post('/logout','Api\AuthController@logout');
    Route::post('/refresh','Api\AuthController@refresh');
    Route::post('/orders','Api\OrdersController@store');
});

//product
Route::get('/products', 'Api\ProductController@index');
Route::get('/product/{id}','Api\ProductController@show');
Route::get('/product/{id}/ratings','Api\ProductController@allratings');
Route::get('/products/sort/{type}/{sort}','Api\ProductController@sort');


//user
Route::get('/users', 'Api\UsersController@index');
Route::get('/user/{id}','Api\UsersController@show');
Route::get('/user/{id}/orders','Api\UsersController@allorders');

//category
Route::get('/categories', 'Api\CategoriesController@index');
Route::get('/category/{id}','Api\CategoriesController@show');

//order
Route::get('/orders', 'Api\OrdersController@index');
Route::get('/order/{id}','Api\OrdersController@show');
Route::get('/order/{id}/products','Api\OrdersController@allproducts');

Route::post('/order','Api\OrdersController@store');
Route::post('/order/product','Api\OrdersController@storeproduct');

