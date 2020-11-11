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

//master
Route::namespace('Backend\Master')->name('admin.')->group(function(){
	Route::resource('master', 'MasterController');
	Route::post('master_changeStatus', 'MasterController@changeStatus')->name('change.master.status');
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
Route::namespace('Backend\Course')->name('admin.')->group(function(){
	Route::resource('course_category', 'CourseCategoryController');
	Route::post('course_category_changeStatus', 'CourseCategoryController@changeStatus')->name('change.course.category.status');
	Route::resource('course', 'CourseController');
	Route::post('course_changeStatus', 'CourseController@changeStatus')->name('change.course.status');

});

Route::namespace('Backend\User')->name('admin.')->group(function(){
	Route::resource('user', 'UserController');
	Route::post('user_changeStatus', 'UserController@changeStatus')->name('change.user.status');
});
Route::namespace('Backend\Image')->name('admin.')->group(function(){
	Route::resource('image', 'ImageController');
	Route::post('image_changeStatus', 'ImageController@changeStatus')->name('change.image.status');

});