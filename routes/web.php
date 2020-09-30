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


Route::get('/', 'welcomeController@index');

//Search History
Route::post('search', 'searchController@store')->name('search.store');
Route::get('history', 'searchController@index')->name('history');

Auth::routes();

