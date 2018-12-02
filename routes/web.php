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
Route::get('/shop-detail/{id}', 'HomeController@shopdetail');
Route::get('/shop-checkout/{id}', 'HomeController@shopcheckout');
Route::get('/shop-chart', 'HomeController@shopchart');
Route::post('/shop-checkout/create', 'PetShopController@store');
Route::get('/petshop', 'HomeController@petshop');
Route::get('/vets', 'HomeController@vets');
Route::get('/appointment', 'HomeController@appointment');
Route::get('/petcare', 'HomeController@petcare');
Route::get('/petcare-detail', 'HomeController@petcaredetail');
Route::get('/petcare-checkout', 'HomeController@petcarecheckout');
Route::get('/petcare-chart', 'HomeController@petcarechart');
Route::get('/contact', 'HomeController@contact');
Route::get('/service', 'HomeController@service');
Route::get('/blog', 'HomeController@blog');
Route::get('/sign-in', 'HomeController@signin');
Route::get('/chat', 'HomeController@chat');
Route::get('/cart', 'CartController@create');
Route::resource('/adminindex', 'AdminModelController');
Route::get('/docindex', 'AdminModelController@docindex');
Route::get('/docboard', 'AdminModelController@docboard');
Route::get('/mitraorder', 'AdminModelController@mitrorder');
Route::get('/mitraindex', 'AdminModelController@mitraindex');