<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/article', 'ArticleApiController@index');
Route::get('/article/{article}', 'ArticleApiController@show');

Route::middleware('auth.basic')->group(function () {
    Route::post('/article/new', 'ArticleApiController@store');
    Route::post('/article/edit/{article}', 'ArticleApiController@update');
    Route::delete('/article/remove/{article}', 'ArticleApiController@destroy');
});