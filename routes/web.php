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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crear', 'PostController@crear')->name('create');

Route::get('/store', 'PostController@store')->name('store');

Route::get('/country', 'CountrieController@index')->name('country');

Route::get('/post', 'PostController@index')->name('post');

Route::get('/search', 'HomeController@search')->name('search');