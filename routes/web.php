<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-sidebar', function () {
    return view('blog-sidebar');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/course-single', function () {
    return view('course-single');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/trainer', function () {
    return view('trainer');
});
