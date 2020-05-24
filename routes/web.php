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

Route::get('/mailing', 'GlobalController@mailing');

Route::get('/', 'GlobalController@index');
Route::get('/nos-services', 'GlobalController@nosServices');
Route::get('/nos-prods', 'GlobalController@nosProds');
Route::get('/l-equipe', 'GlobalController@lequipe');
Route::get('/contact', 'GlobalController@contact');
Route::get('/mentions-legales', 'GlobalController@mentionsLegales');
Route::get('/administration', 'GlobalController@administration')->name('administration');
Route::get('/gestion-de-projet', 'GlobalController@gestionDeProjet')->name('gestion-de-projet');
Route::post('/new-user', 'GlobalController@createUser')->name('new-user');
Route::post('/new-service', 'GlobalController@createService')->name('new-service');
Route::post('/new-prod', 'GlobalController@createProduction')->name('new-prod');
Route::post('/new-cat', 'GlobalController@createCategorie')->name('new-cat');
Route::post('/new-reseau', 'GlobalController@createReseau')->name('new-reseau');
Route::post('/new-projet', 'GlobalController@addProjetToClient')->name('new-projet');
Route::post('/new-fichier', 'GlobalController@addFichierToProjet')->name('new-fichier');
Route::delete('/destroy-user/{id}', 'GlobalController@destroyUser')->name('destroy-user');
Route::delete('/destroy-service/{id}', 'GlobalController@destroyService')->name('destroy-service');
Route::delete('/destroy-production/{id}', 'GlobalController@destroyProduction')->name('destroy-production');
Route::delete('/destroy-categorie/{id}', 'GlobalController@destroyCategorie')->name('destroy-categorie');
Route::delete('/destroy-reseau/{id}', 'GlobalController@destroyReseau')->name('destroy-reseau');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
