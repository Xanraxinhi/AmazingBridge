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

Route::get('/laravel', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'FontendController@index')->name('index');
Route::get('country-bridge', 'FontendController@show')->name('bridge.show');
Route::get('country-bridge/detail', 'FontendController@detail')->name('bridge.detail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('', 'HomeController@redirectIndex');
    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'bridges'], function () {
        route::get('','BridgeController@index')->name('bridge');
        Route::get('create', 'BridgeController@getCreate')->name('bridge.create');
        Route::get('edit/{id}', 'BridgeController@getEdit')->name('bridge.edit');
        Route::get('delete/{id}', 'BridgeController@getDelete')->name('bridge.delete');
        Route::post('update', 'BridgeController@postUpdate')->name('bridge.update');

        /* view list image */
        Route::get('list-photo-bridge/{id}', 'BridgeController@getListPhoto')->name('bridge.photo.list');
        /* view update image */
        Route::get('photo-bridge', 'BridgeController@getPhoto')->name('bridge.photo');
        Route::post('update-photo', 'BridgeController@postUpdatePhoto')->name('bridge.update.photo');
        Route::get('deletephoto/{id}', 'BridgeController@getDeletePhoto')->name('brige.delete.photo');

        /* view update parameter */
        Route::get('parameter-bridge/{id}', 'BridgeController@getParameter')->name('bridge.parameter');
        Route::post('update-parameter', 'BridgeController@postUpdateParameter')->name('bridge.update.parameter');
    });

    Route::group(['prefix' => 'countries'], function () {
       route::get('', 'CountryController@index')->name('country');
       Route::get('create', 'CountryController@getCreate')->name('country.create');
       Route::get('edit/{id}', 'CountryController@getEdit')->name('country.edit');
       Route::get('delete/{id}', 'CountryController@getDelete')->name('country.delete');
       Route::post('update', 'CountryController@postUpdate')->name('country.update');
    });
});
