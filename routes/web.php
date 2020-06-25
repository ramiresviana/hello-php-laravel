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

Route::get('/', 'ArticleController@index');
Route::get('/article/{article}', 'ArticleController@show');
Route::get('/new', 'ArticleController@create');
Route::post('/new', 'ArticleController@store');
Route::get('/edit', 'ArticleController@edit');