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
use App\portal;

Route::get('/', function () {
    return view('welcome');
});
Route::get('notas', function(){

	$notas= Nota::all();
	//dd($notas);
	return view('notas', compact('notas'));
});


Route::get('encuesta', function(){
	return view('callcenter/encuesta');
});