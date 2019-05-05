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

Route::get('/home', 'HomeController@Home')->name('home');


Route::get('/about', 'HomeController@About')->name('about');

Route::get('/rabbi', 'HomeController@Rabbi')->name('rabbi');