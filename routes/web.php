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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');

Route::get('/dashboard', 'HomeController@dashboardV1')->name('dashboard-v1');

Route::get('/dashboard-v2','HomeController@dashboardv2')->name('dashboard-v2');

Route::get('/product', 'ProductController@index')->name('product');

Route::get('/service', 'ServiceController@index')->name('service');

//user
Route::get('/client', 'ClientController@index')->name('client');

Route::get('/profile','ProfileController@index')->name('profile');
