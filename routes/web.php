<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'GlobalController@index');
Route::get('/nos-prods', 'GlobalController@nosProds');
Route::get('/nos-services', 'GlobalController@nosServices');
Route::get('/contact', 'GlobalController@contact');
