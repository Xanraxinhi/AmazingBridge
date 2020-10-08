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

Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'HomeController@index');
    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'bridges'], function () {
       route::get('','BridgeController@index')->name('bridge');
    });
    Route::group(['prefix' => 'countries'], function () {
       route::get('', 'CountryController@index')->name('country');
    });
});
