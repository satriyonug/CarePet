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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@show');
Route::get('/contact', 'HomeController@contact');
Route::get('/vetconsultation', 'HomeController@consultation');
Route::get('/petshop', 'HomeController@petshop');
Route::get('/about', 'HomeController@about');