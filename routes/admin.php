<?php

Route::prefix('admin')->name('admin.')->namespace('Backend')->group(function(){
	Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
});

Route::prefix('admin')->name('admin.')->namespace('Backend\Auth')->group(function(){
	Route::get('login','LoginController@showLoginForm')->name('login.form');
	Route::post('login','LoginController@login')->name('login.submit');
	Route::get('logout','LoginController@logout')->name('logout');
	Route::put('changePassword/{slug}', 'ChangePasswordController@update')->name('changePassword.update');
});