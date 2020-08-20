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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});


Route::get('about', function () {
    return view('about');
});


Route::get('blogs', function () {
    return view('blogs');
});


Route::get('career-training', function () {
    return view('career-training');
});

Route::get('career', function () {
    return view('career');
});

Route::get('contact-solutions', function () {
    return view('contact-solutions');
});


Route::get('home-training', function () {
    return view('home-training');
});

Route::get('library', function () {
    return view('library');
});

Route::get('home-solution', function () {
    return view('home-solution');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('gallery-training', function () {
    return view('gallery-training');
});

Route::get('products', function () {
    return view('products');
});
Route::get('services', function () {
    return view('services');
});

Route::get('course', function () {
    return view('course-training');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('online-admission', function () {
    return view('online-admission');
});


Route::get('ourclients', function () {
    return view('ourclients');
});

Route::get('ourmembers', function () {
    return view('ourmembers');
});

Route::get('ourpatners', function () {
    return view('ourpatners');
});

Route::get('ourprojects', function () {
    return view('ourprojects');
});

Route::get('ourworks', function () {
    return view('ourworks');
});


Route::get('ticket-support', function () {
    return view('ticket-support');
});

Route::get('privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('FAQ', function () {
    return view('FAQ');
});

