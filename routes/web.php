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

// this is the landing page
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


// if user is authenticated
Route::get('/dashboard', 'User\DashboardController@index')->name('dashboard');
