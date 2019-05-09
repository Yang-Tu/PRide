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
Route::get('/team', function () {
    return view('about/team');
});

Route::get('/values', function () {
    return view('about/values');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/carpool', function () {
    return view('/services/carpool');
});

Route::get('/rideshare', function () {
    return view('/services/rideshare');
});

Route::get('/bus', function () {
    return view('/services/bus');
});

Route::get('/last-min', function () {
    return view('/services/last-min');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
