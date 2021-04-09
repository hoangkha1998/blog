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
        Route::get('/create', 'PostController@create')->name('create');
        Route::post('/store', 'PostController@store')->name('store');
    });
    Route::group(['prefix'=>'user', 'as'=>'user.'],function () {
        Route::get('/', 'UserController@index')->name('index');
    });

    Route::get('stripe', 'StripePaymentController@stripe')->name('stripe.get');
    Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
});

Auth::routes();

Route::get('admin/login', 'Auth\LoginController@showLoginFormUsers')->name('login');
Route::post('login', 'Auth\LoginController@checklogin')->name('postLogin');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('admin/signup', 'Auth\LoginController@showSignUpFormUsers')->name('signup');
Route::post('signup', 'Auth\LoginController@signup')->name('postSignup');


// Route::get('stripe', 'StripePaymentController@stripe');
// Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');