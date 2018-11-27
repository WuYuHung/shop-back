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

//product
Route::get('/products', 'Api\ProductController@index');
Route::get('/product/{id}','Api\ProductController@show');
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

