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

Route::get('/devices','DevicesController@index');

Route::get('/devices/create','DevicesController@create');

Route::post('/devicesaction','DevicesController@storeDevice');

Route::resource('products', 'WebControllers\ProductController');
