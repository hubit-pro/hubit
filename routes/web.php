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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home/home');
});

Route::get('home', function () {
    return view('home/home');
});
Route::get('career', function () {
    return view('home/career');
});

Route::get('about', function () {
    return view('home/about');
});
Route::get('gallery', function () {
    return view('home/gallery');
});
Route::get('contact', function () {
    return view('home/contact');
});
Route::get('online-admission', function () {
    return view('home/online-admission');
});


Route::get('ourclients', function () {
    return view('home/ourclients');
});

Route::get('ourmembers', function () {
    return view('home/ourmembers');
});

Route::get('ourpatners', function () {
    return view('home/ourpatners');
});

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
Route::get('course', function () {
    return view('training/course-training');
});
Route::get('business-services', function () {
    return view('training/business-services');
});

Route::get('contact-solutions', function () {
    return view('training/contact-solutions');
});
Route::get('home-solution', function () {
    return view('solution/home-solution');
});
Route::get('products', function () {
    return view('solution/products');
});
Route::get('services', function () {
    return view('solution/services');
});
Route::get('login', function () {
    return view('admin-panel/login');
});


// admin panel route start
Route::get('log-admin', function () {
    return view('admin-panel/log-admin');
});
Route::view('login','login');
Route::post('login','admincontroller@index');
Route::get('home-admin', function () {
    return view('admin-panel/home-admin');
});
Route::get('home-admin/',
function(){
    if(!session()->has('data'))
    {
        return redirect ('log-admin');
    }
        return view('admin-panel/home-admin');
});
Route::get('/logout', function()
{
    session()->forget('data');
    return redirect('log-admin');
});
// admin panel route end

