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

//acceuil 
Route::get('acceuil','TestController@index')->name('acceuil');



//admin localisation
Route::get('localisation/create','TestController@create')->name('showform');
Route::post('localisation/create','TestController@store')->name('storelocalisation');

//gestion des pharmacies
Route::get('pharmacie','PharmacieController@create')->name('formpharmacie');
Route::post('pharmacie/create','PharmacieController@store')->name('storepharmacie');

//affichage des pharmacies
Route::get('pharmacie/garde','PharmacieController@showall')->name('showall');
Route::get('pharmacie/garde/{nom}/{id}','PharmacieController@showliste')->name('showliste');
Route::get('pharmacie/garde/{id}','PharmacieController@showdetails')->name('showdetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
