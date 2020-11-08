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
Route::namespace('Api')->group(function(){
    Route::get('categories', 'CategoryController@index');
    Route::get('categories/{id}', 'CategoryController@show');
    Route::post('categories/create', 'CategoryController@store');
    Route::put('categories/update/{id}', 'CategoryController@update');
    Route::post('categories/delete/{id}', 'CategoryController@destroy');


    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show');
    Route::post('products/create', 'ProductController@store');
    Route::put('products/update/{id}', 'ProductController@update');
    Route::post('products/delete/{id}', 'ProductController@destroy');

    // Route::resource('customers', 'CustomerController');

    Route::get('customers', 'CustomerController@index');
    Route::get('customers/{id}', 'CustomerController@show');
    Route::post('customers/create', 'CustomerController@store');
    Route::put('customers/update/{id}', 'CustomerController@update');
    Route::post('customers/delete/{id}', 'CustomerController@destroy');

    Route::group([
        'prefix' => 'auth'
    ], function() {
        Route::post('login', 'UserController@login');
        Route::post('register', 'UserController@register');

        Route::group([
            'middleware' => 'auth:api'
        ], function() {
            Route::get('logout', 'UserController@logout');
            Route::get('detail', 'UserController@detail');
        });
    });
}); 