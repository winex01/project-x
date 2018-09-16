<?php

#default route
Route::get('/', 'HomeController@index')->name('home');

#authentication route
Auth::routes();
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');


#authenticated route
Route::middleware(['auth'])->group(function () {
	// user modules
	Route::namespace('User')->group(function () {
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	});
});
