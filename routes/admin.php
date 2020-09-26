<?php

Route::prefix('admin')->name('admin.')->namespace('Backend')->group(function(){
	Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
});