<?php

use Illuminate\Support\Facades\Route;

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

Route::name('frontend.')->namespace('Frontend')->group(function(){
    Route::get('/','Homecontroller@index')->name('index');
    Route::get('/home','Homecontroller@index')->name('index');
});
Route::prefix('f1')->name('frontend.')->namespace('Frontend\Aboutus')->group(function(){
    Route::get('aboutus', 'AboutusController@index')->name('aboutus');
});
Route::prefix('f1')->name('frontend.')->namespace('Frontend\Gallary')->group(function(){
    Route::get('gallary_category/{slug}', 'GallaryController@index')->name('gallary_category');
});
Route::prefix('f1')->name('frontend.')->namespace('Frontend\Career')->group(function(){
    Route::get('career', 'CareerController@index')->name('career');
});
//for solution
Route::name('frontend.')->namespace('Frontend\ItSolution')->group(function(){
    Route::get('it-solution','Homecontroller@index')->name('it-solution');
});
Route::prefix('f1')->name('frontend.')->namespace('Frontend\Product')->group(function(){
    Route::get('products', 'ProductController@index')->name('product');
});
Route::prefix('f1')->name('frontend.')->namespace('Frontend\Service')->group(function(){
    Route::get('services', 'ServiceController@index')->name('service');
});
//for training
Route::name('frontend.')->namespace('Frontend\ItTraining')->group(function(){
    Route::get('it-training','HomeController@index')->name('it-training');
});
// Route::get('home', function () {
//     return view('home/home');
// });
Route::get('career', function () {
    return view('home/career');
});
Route::get('about', function () {
    return view('home/about');
});
// Route::get('gallery', function () {
//     return view('home/gallery');
// });
Route::get('contact', function () {
    return view('home/contact');
});
Route::get('online-admission', function () {
    return view('home/online-admission');
});
// Route::get('ourclients', function () {
//     return view('home/ourclients');
// });
// Route::get('ourmembers', function () {
//     return view('home/ourmembers');
// });

// Route::get('ourpatners', function () {
//     return view('home/ourpatners');
// });

Route::get('ourprojects', function () {
    return view('home/ourprojects');
});

Route::get('ourworks', function () {
    return view('home/ourworks');
});


Route::get('ticket-support', function () {
    return view('home/ticket-support');
});

Route::get('privacy-policy', function () {
    return view('home/privacy-policy');
});

Route::get('FAQ', function () {
    return view('home/FAQ');
});

Route::get('testimonials', function () {
    return view('includes/testimonials');
});







Route::get('blogs', function () {
    return view('training/blogs');
});
Route::get('home-training', function () {
    return view('training/home-training');
});
Route::get('library', function () {
    return view('training/library');
});
Route::get('career-training', function () {
    return view('training/career-training');
});
Route::get('courses', function () {
    return view('training/course-training');
});

Route::get('business-services', function () {
    return view('training/business-services');
});
Route::get('hire-top-talent', function () {
    return view('training/hire-top-talent');
});
Route::get('corporate-patners', function () {
    return view('training/corporate-patners');
});
Route::get('corporate-training', function () {
    return view('training/corporate-training');
});
Route::get('customs-hackathons', function () {
    return view('training/customs-hackathons');
});
Route::get('aboutus', function () {
    return view('training/aboutus');
});
Route::get('career-training', function () {
    return view('training/career-training');
});
Route::get('examination', function () {
    return view('training/examination');
});
Route::get('contactus', function () {
    return view('training/contact');
});
Route::get('blog-single', function () {
    return view('training/blog-single');
});
Route::get('categories', function () {
    return view('training/categories');
});
Route::get('course-details', function () {
    return view('training/course-details');
});
Route::get('h1', function () {
    return view('training/librarysingle');
});




Route::get('contact-solutions', function () {
    return view('solution/contact-solutions');
});

Route::get('subproduct', function () {
    return view('solution/subproduct');
});
Route::get('home-solution', function () {
    return view('solution/home-solution');
});
Route::get('products', function () {
    return view('solution/products');
});
// Route::get('services', function () {
//     return view('solution/services');
// });
Route::get('login', function () {
    return view('admin-panel/login');
});


// admin panel route start
Route::get('log-admin', function () {
    return view('admin-panel/log-admin');
});
Route::view('login','login');

