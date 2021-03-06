<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

// Frontend
Route::get('/', 'FrontendController@getHome');
Route::get('detail/{id}.html', 'FrontendController@getDetail');
Route::get('category/{id}.html', 'FrontendController@getCategory');
Route::get('search','FrontendController@getSearch');




Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
    Route::resource('customers', 'CustomerController');
    Route::resource('bills', 'BillController');
    // Route::resource('billdetails', 'BillDetailController');
    Route::get('billdetail/{bill_id}.html', 'BillDetailController@getBillDetail');
});

// //Authentication
Route::group(['middleware' => ['web', 'admin'],'namespace' => 'Admin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
        Route::resource('users', 'UserController');
        Route::resource('customers', 'CustomerController');
    });
});

// //Gio hang
Route::group(['middleware' => 'checklogin', 'prefix' => 'cart'], function(){
    Route::get('add/{id}', 'CartController@getAddCart');
    Route::get('show','CartController@getShowCart');
    Route::get('delete/{id}', 'CartController@getDeleteCart');
    Route::get('update', 'CartController@getUpdateCart');
    Route::post('show', 'CartController@postComplete');
});
Route::get('complete', 'CartController@getComplete');

//Login

Auth::routes();

Route::get('/admin.index', 'HomeController@index')->name('admin');
