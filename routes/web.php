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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Requests routes
Route::group(['prefix' => 'requests', 'middleware' => ['auth', 'verified']], function () {
    Route::post('/list', "RequestController@index")
        ->name('requests.list')
        ->middleware('has.permission:requests.list');

    Route::post('/create', "RequestController@store")
        ->name('requests.create')
        ->middleware('has.permission:requests.create');

    Route::post('/assign', "RequestController@assign")
        ->name('requests.assign')
        ->middleware('has.permission:requests.assign');

    Route::post('/ingredients', "RequestController@requestIngredients")
        ->name('requests.ingredients')
        ->middleware('has.permission:requests.ingredients');

    Route::post('/deliver', "GroceryController@deliverRequestIngredients")
        ->name('requests.deliver')
        ->middleware('has.permission:requests.deliver');

    Route::post('/buy', 'GroceryController@buyRequestIngredients')
        ->name('requests.buy')
        ->middleware('has.permission:requests.buy');

    Route::post('/prepare', 'RequestController@preparePlate')
        ->name('requests.prepare')
        ->middleware('has.permission:plates.prepare');
});

//Plate routes
Route::group(['prefix' => 'plates', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/list', "PlateController@index")
        ->name('plates.list')
        ->middleware('has.permission:plates.list');

    Route::post('/datatable', "PlateController@datatable")
        ->name('plates.datatable')
        ->middleware('has.permission:plates.list');

    Route::post('/ingredients', "PlateController@getIngredients")
        ->name('plates.ingredients')
        ->middleware('has.permission:plates.list');
});

//Market routes
Route::group(['prefix' => 'grocery', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', "GroceryController@index")
        ->name('grocery.list')
        ->middleware('has.permission:grocery.list');

    Route::post('/buy', "GroceryController@buyIngredients")
        ->name('grocery.buy')
        ->middleware('has.permission:grocery.list');

    Route::post('/datatable', "GroceryController@datatable")
        ->name('grocery.datatable')
        ->middleware('has.permission:grocery.list');
});

//User routes
Route::group(['prefix' => 'users', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/profile', "UserController@profile")
        ->name('users.profile')
        ->middleware('has.permission:users.profile');

    Route::post('{user}/update', "UserController@update")
        ->name('users.update')
        ->middleware('has.permission:users.edit');
});

Route::get('/permissions', function () {
    return Auth::user()->getPermissions();
});
