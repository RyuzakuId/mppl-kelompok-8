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

Route::prefix('artikels')->group(function () {
    Route::get('/', 'ArtikelController@index');
    Route::get('/{id}', 'ArtikelController@show');
    Route::post('/', 'ArtikelController@store');
    Route::put('/{id}', 'ArtikelController@update');
    Route::delete('/{id}', 'ArtikelController@destroy');
});