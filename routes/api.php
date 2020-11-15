<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/artikels', 'ArtikelController@index');
Route::post('/artikel/store', 'ArtikelController@store');
Route::get('/artikel/{id}', 'ArtikelController@show');
Route::post('/artikel/update/{id}', 'ArtikelController@update');
Route::delete('/artikel/{id}', 'ArtikelController@destroy');