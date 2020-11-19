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

// Route Resource Artikel
Route::prefix('artikels')->group(function () {
    // Get artikel
    Route::get('/', 'ArtikelController@index');
    Route::get('/{id}', 'ArtikelController@show');
    
    // Create artikel
    Route::post('/', 'ArtikelController@store');
    
    // Update artikel
    Route::put('/{id}', 'ArtikelController@update');
    
    // Delete artikel
    Route::delete('/{id}', 'ArtikelController@destroy');
});

// Route Resource Portofolio
Route::prefix('portofolios')->group(function () {
    // Get portofolio
    Route::get('/', 'PortofolioController@get_all_porto');
    Route::get('/{id}', 'PortofolioController@get_porto');
    
    // Create portofolio
    Route::post('/', 'PortofolioController@store');
    
    // Delete portofolio
    Route::delete('/{id}', 'PortofolioController@destroy');
});

// Route Resource Category
Route::prefix('categories')->group(function () {
    // Get category
    Route::get('/', 'CategoryController@get_all_cat');
    Route::get('/{id}/portofolios', 'CategoryController@get_porto_by_cat');
    
    // Create category
    Route::post('/', 'CategoryController@store');
    
    // Update Category
    Route::put('/{id}', 'CategoryController@update');

    // Delete Category
    Route::delete('/{id}', 'CategoryController@destroy');
});

// Route Resource Bahan
Route::prefix('bahans')->group(function () {
    // Get Bahan
    Route::get('/', 'BahanController@get_all_bahan');

    // Create Bahan
    Route::post('/', 'BahanController@store');

    // Update Bahan
    Route::put('/{id}', 'BahanController@update');

    // Delete Bahan
    Route::delete('/{id}', 'BahanController@destroy');
});

// Route Resource Tinta
Route::prefix('tintas')->group(function () {
    // Get Tinta
    Route::get('/', 'TintaController@get_all_tinta');

    // Create Tinta
    Route::post('/', 'TintaController@store');

    // Update Tinta
    Route::put('/{id}', 'TintaController@update');

    // Delete Tinta
    Route::delete('/{id}', 'TintaController@destroy');
});