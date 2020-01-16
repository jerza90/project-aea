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

//client
Route::get('/client', 'ClientController@index')->name('client');
Route::post('/client/create', 'ClientController@client_create')->name('client_create');
Route::post('/client/edit', 'ClientController@client_edit')->name('client_edit');
Route::get('/client/client_add', 'ClientController@client_add')->name('client_add');

Route::get('/profile','ProfileController@index')->name('profile');

//order
Route::get('/order','OrderController@index')->name('order');
