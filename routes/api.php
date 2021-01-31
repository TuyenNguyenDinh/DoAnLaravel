<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::namespace('Api')->group(function () {
    Route::get('categories', 'CategoryController@index');
    Route::get('categories/{id}', 'CategoryController@show')->where('id', '[0-9]+');;
    Route::get('categories/products/{id}', 'CategoryController@showById')->where('id', '[0-9]+');;
    Route::post('categories/create', 'CategoryController@store');
    Route::put('categories/update/{id}', 'CategoryController@update')->where('id', '[0-9]+');;
    Route::post('categories/delete/{id}', 'CategoryController@destroy')->where('id', '[0-9]+');;


    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show')->where('id', '[0-9]+');;
    Route::get('products/search', 'ProductController@search');
    Route::post('products/create', 'ProductController@store');
    Route::put('products/update/{id}', 'ProductController@update')->where('id', '[0-9]+');;
    Route::post('products/delete/{id}', 'ProductController@destroy')->where('id', '[0-9]+');;



    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{id}', 'CustomerController@show')->where('id', '[0-9]+');;
    Route::post('customers/create', 'CustomerController@store');
    Route::put('customers/update/{id}', 'CustomerController@update')->where('id', '[0-9]+');;
    Route::post('customers/delete/{id}', 'CustomerController@destroy')->where('id', '[0-9]+');;

    
    Route::get('oders', 'BillController@index');
    Route::post('orders/create', 'BillController@created');
    Route::get('oders/{id}', 'BillController@show');

    Route::get('orderdetails', 'BillDetailsController@index');
    Route::post('orderdetails/create', 'BillDetailsController@store');
    Route::get('orderdetails/{id}', 'BillDetailsController@show');


    Route::group([

        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {

        Route::post('login', 'APIController@login');
        Route::post('logout', 'APIController@logout');
        Route::post('register', 'APIController@register');
        Route::post('refresh', 'APIController@refresh');
        Route::post('me', 'APIController@me');
    });
    
});
