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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/blogs', function () {
    return view('pages.blogs');
});

Route::get('/blogs/blog', function () {
    return view('pages.blog');
});

Route::get('/about-me', function () {
    return view('pages.about');
});

Route::get('/cv', function () {
    return view('pages.cv');
});

Route::get('/realisations', function () {
    return view('pages.realisations');
});
Route::get('/contact', function () {
    return view('pages.contact');
});


