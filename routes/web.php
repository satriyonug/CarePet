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
Route::get('/send-pet', 'HomeController@appointment');
Route::get('/petcare', 'HomeController@petcare');
Route::get('/petcare-detail', 'HomeController@petcaredetail');
Route::get('/petcare-checkout/{id}', 'HomeController@petcarecheckout');
Route::get('/petcare-chart', 'HomeController@petcarechart');
Route::post('/petcare-checkout/create', 'PetCareController@store');
Route::get('/petcare-finish', 'HomeController@ceckhoutfinish');
Route::get('/contact', 'HomeController@contact');
Route::get('/service', 'HomeController@service');
Route::get('/blog', 'HomeController@blog');
Route::get('/sign-in', 'HomeController@signin');
Route::get('/chat', 'HomeController@chat');
Route::get('/success', 'HomeController@success');
Route::post('/appointment/create', 'SendPetController@store');
Route::resource('/indexAdmin', 'AdminModelController');