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
    Route::post('/list', "RequestController@index")->middleware('has.permission:request.list');
    Route::post('/create', "RequestController@store")->middleware('has.permission:request.create');
    Route::post('/assign', "RequestController@assign")->middleware('has.permission:request.assign');
});

//Plate routes
Route::group(['prefix' => 'plate', 'middlewate' => ['auth']], function () {
    
});

Route::get('/permissions', function () {
    return Auth::user()->getPermissions();
});

