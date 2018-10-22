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
Route::get('/shop', 'HomeController@shop');
Route::get('/shop-detail', 'HomeController@shopdetail');
Route::get('/shop-checkout', 'HomeController@shopcheckout');
Route::get('/shop-chart', 'HomeController@shopchart');
Route::get('/vets', 'HomeController@vets');
Route::get('/appointment', 'HomeController@appointment');
