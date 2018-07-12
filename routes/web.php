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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('home.create');
Route::post('/store', 'HomeController@store')->name('home.store');


Route::get('/monitor', 'MonitorController@index')->name('monitor');
Route::get('/analytic', 'AnalyticController@index')->name('analytic');
Route::get('/ecosystem', 'EcosystemController@index')->name('ecosystem');

Route::resource('profile', 'ProfileController');
