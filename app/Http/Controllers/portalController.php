<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\nota;
use App\registro;

class portalController extends Controller
{
	public function index()
	{
		return view('index');
	}
	public function encuestas()
	{
		return view('callcenter/encuesta');
	}
	public function encuestaServicio()
	{
		$registro = registro::all();
		return view('callcenter/servicio', compact('registro'));
	}
	public function cadaEncuestaServicio($id)
	{
		return view("callcenter/llenado", compact('id'));
	}
	public function ventas()
	{
		return view('callcenter/ventas');
	}
	public function listaEncuestaServicio()
	{
		$notas= Nota::all();
		//dd($notas);
		return view('notas', compact('notas'));
	}
}
