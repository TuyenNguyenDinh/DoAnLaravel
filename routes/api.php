<?php

use App\Http\Controllers\Api\CategoryController;
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
    Route::get('categories', 'CategoryController@Index');
    Route::get('categories/{id}', 'CategoryController@show');
    Route::post('categories/create', 'CategoryController@store');
    Route::put('categories/update/{id}', 'CategoryController@update');
    Route::post('categories/delete/{id}', 'CategoryController@destroy');

    // Route::resource('products', 'ProductController');
    // Route::resource('customers', 'CustomerController');
});