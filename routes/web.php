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

Route::get('/', 'CategoryController@Start');
Route::get('/post/{id}', 'PostController@destroy');
//Route::get('/post', 'PostController@index');
//Route::get('/post/{slug}', 'PostController@showName');
//Route::get('/post/{id}', 'PostController@show');
//Route::get('/post/{name}', 'PostController@create');