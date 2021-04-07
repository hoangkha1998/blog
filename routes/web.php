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

Route::group(['prefix'=>'admin', 'as'=>'admin.', 'middleware' => ['auth:web']],function () {
    Route::get('/', 'DashboardController@index')->name('index');
    Route::group(['prefix'=>'post', 'as'=>'post.'],function () {
        Route::get('/', 'PostController@index')->name('index');
    });
});

Auth::routes();

Route::get('admin/login', 'Auth\LoginController@showLoginFormUsers')->name('login');
Route::post('login', 'Auth\LoginController@checklogin')->name('postLogin');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');