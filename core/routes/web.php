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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apiTest', "GroceryController@buy");
Route::get('/apiTest/{name}', "GroceryController@buy");

//Requests routes
Route::group(['prefix' => 'request', 'middlewate' => ['auth']], function () {
    Route::post('/list', "RequestController@index");
    Route::get('/create', "RequestController@store");
    Route::get('/create/{quantity}', "RequestController@store")->where('quantity','[0-9]+');
});

