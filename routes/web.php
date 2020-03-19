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

Route::get('/', function ()
{
    return view('inicio');
})->name('inicio');

Route::get('/buscando', function ()
{
    return view('buscando');
})->name('buscando');

Route::resource('incidencias', 'IncidenciaController');
Route::get('extraviados', 'IncidenciaController@indexEncontrados')
->name('incidencias.indexEncontrados');
Route::get('Reportar', 'IncidenciaController@createReporte')
->name('incidencias.createReporte');
