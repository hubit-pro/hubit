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

//aboutus
Route::namespace('Backend\Aboutus')->name('admin.')->group(function(){
	Route::resource('aboutus', 'AboutusController');
	Route::post('aboutus_changeStatus', 'AboutusController@changeStatus')->name('change.aboutus.status');
});

Route::namespace('Backend\Gallary')->name('admin.')->group(function(){
	Route::resource('gallary_category', 'GallaryCategoryController');
	Route::post('gallary_category_changeStatus', 'GallaryCategoryController@changeStatus')->name('change.gallary.category.status');
	Route::resource('gallary_sub_category', 'GallarySubCategoryController');
	Route::post('gallary_sub_category_changeStatus', 'GallarySubCategoryController@changeStatus')->name('change.gallary.sub.category.status');
	Route::resource('gallary', 'GallaryController');
	Route::post('gallary_changeStatus', 'GallaryController@changeStatus')->name('change.gallary.status');
	Route::post('gallalry-sub-category', 'GallaryController@subCategory')->name('gallary.sub.category');
});

Route::namespace('Backend\Contactus')->name('admin.')->group(function(){
	Route::resource('contactus', 'ContactusController');
	Route::post('contactus_changeStatus', 'ContactusController@changeStatus')->name('change.contactus.status');
});
Route::namespace('Backend\Product')->name('admin.')->group(function(){
	Route::resource('product_category', 'ProductCategoryController');
	Route::post('product_category_changeStatus', 'ProductCategoryController@changeStatus')->name('change.product.category.status');
	Route::resource('product', 'ProductController');
	Route::post('product_changeStatus', 'ProductController@changeStatus')->name('change.product.status');

});