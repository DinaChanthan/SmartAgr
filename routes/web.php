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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/crop', 'DashboardController@manage')->name('crop');

Route::resource('farm', 'FarmController');
Route::resource('product', 'ProductController');
Route::resource('monitor', 'MonitorController');
Route::resource('device', 'DeviceController');

Route::get('/analytic', 'AnalyticController@index')->name('analytic');
Route::get('/ecosystem', 'EcosystemController@index')->name('ecosystem');


Route::post('status/{id}', 'StatusController@status')->name('status');




