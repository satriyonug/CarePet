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
Route::get('/chart/1', 'ChartController@index');
Route::get('/chart/2', 'ChartController@index_care');
Route::post('/chart/delete', 'ChartController@destroy');
Route::post('/chart_care/delete', 'ChartController@destroy_care');
Route::post('/shop-checkout/create', 'PetShopController@store');
Route::get('/petshop', 'HomeController@petshop');
Route::get('/vets', 'HomeController@vets');
Route::get('/appointment', 'HomeController@appointment');
Route::post('/appointment/create', 'SendPetController@store');
Route::get('/petcare', 'HomeController@petcare');
Route::get('/petcare-detail', 'HomeController@petcaredetail');
Route::get('/petcare-checkout', 'HomeController@petcarecheckout');
Route::get('/petcare-checkout/{id}', 'HomeController@petcarecheckout');
Route::post('/petcare-checkout/create', 'PetCareController@store');
Route::get('/petcare-chart', 'HomeController@petcarechart');
Route::get('/contact', 'HomeController@contact');
Route::get('/service', 'HomeController@service');
Route::get('/blog', 'HomeController@blog');
Route::get('/sign-in', 'HomeController@signin');
Route::post('/masuk', 'HomeController@login');
Route::get('/sign-up', 'HomeController@signup');
Route::post('/daftar', 'HomeController@store');
Route::get('/chat', 'HomeController@chat');
Route::get('/cart', 'CartController@create');
Route::resource('/adminindex', 'AdminModelController');
Route::get('/docchat', 'AdminModelController@docchat');
Route::get('/docboard', 'AdminModelController@docboard');
Route::get('/mitraorder', 'AdminModelController@mitraorder');
Route::get('/mitraindex', 'AdminModelController@mitraindex');
Route::get('/about', 'HomeController@about');
Route::get('/sign-out', 'HomeController@logout');
Route::get('/mitra', 'MitraController@index');
Route::post('/produk/create', 'ProdukController@store');
Route::get('/mitra_care', 'MitraController@index_care');
Route::post('/care/create', 'MitraController@store');