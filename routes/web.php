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

Route::get('/travelbuddy', 'BuddyController@index')->name('buddy-v1');

Route::get('/profile','ProfileController@index')->name('profile');
