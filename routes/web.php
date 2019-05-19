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



Route::get('/', 'HomeController@ShowHome')->name('/');

Route::get('/category/{slug}', 'HomeController@CategoryByProduct')->name('category');

Route::get('/register', 'AuthController@ShowRegister')->name('register');
Route::post('/register', 'AuthController@processRegister');

Route::get('/login', 'AuthController@ShowLogin')->name('login');
Route::post('/login', 'AuthController@processLogin');

Route::get('/profile', 'AuthController@ShowProfile')->name('profile');
Route::get('/logout', 'AuthController@Logout')->name('logout');

Route::get('/dashboard', 'HomeController@ShowDashboard')->name('dashboard');