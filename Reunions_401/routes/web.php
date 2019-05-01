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

Route::get('user/{id}', 'UserController@show');

Route::get('/method', function () {
    return view('method');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/business', function () {
    return view('business');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
