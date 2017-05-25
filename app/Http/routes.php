<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\nota;
use App\registro;

Route::get('/', 'portalController@index');
Route::get('encuesta', 'portalController@encuestas');
Route::get('encuesta/servicio', 'portalController@encuestaServicio');

Route::get('encuesta/servicio/{id_registro}', 'portalController@cadaEncuestaServicio');

Route::get('encuesta/ventas', 'portalController@ventas');
Route::get('notas', 'portalController@listaEncuestaServicio');