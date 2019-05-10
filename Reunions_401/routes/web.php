<?php

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
    return view('welcome');
});

Route::get('/method', function () {
    return view('method');
});
Route::get('/team', function () {
    return view('about/team');
});

Route::get('/values', function () {
    return view('about/values');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/services', function () {
    return view('services');
});



Auth::routes();
Route::get('/user-page', 'HomeController@index')->name('home');
Route::get('/notifications', 'HomeController@notifications')->name('home');
Route::get('/settings', 'HomeController@settings')->name('home');
Auth::routes();
