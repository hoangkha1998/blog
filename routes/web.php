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
    return view('user.home');
});
Route::get('/blog', function () {
    return view('user.blog');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/team', function () {
    return view('user.team');
});

Route::get('/blog-detail', function () {
    return view('user.blog-detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});
