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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/manage', 'HomeController@manage')->name('manage');

Route::resource('manages', 'ManageController');

Route::get('/monitor', 'MonitorController@index')->name('monitor');
Route::get('/analytic', 'AnalyticController@index')->name('analytic');
Route::get('/ecosystem', 'EcosystemController@index')->name('ecosystem');


