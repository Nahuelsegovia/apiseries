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


Route::post('/crearserie', 'SerieController@crearSerie')->name('crear.serie');

Route::delete('/eliminar/{id}', 'SerieController@eliminarSerie')->name('eliminar.serie');

Route::put('/editar/{id}', 'SerieController@editarSerie')->name('editar.serie');

Route::get('/ver', 'SerieController@verSeries')->name('ver.series');

Route::get('/ver/{id}', 'SerieController@verSerie')->name('ver.serie');


