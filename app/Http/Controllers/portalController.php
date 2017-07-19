<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transaction;
use Log;
use App\registro;
use Excel;

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
	/*public function cadaEncuestaServicio(Request $request)
	{
		#dd($request->get('id_registro'));
		#$registro=registro::id($request->get('id_registro'));
		$consulta = registro::where('id_registro',$request->get('id_registro'))->first();
		Log::debug($consulta);
		return view("callcenter/llenado", compact('consulta'));
	}*/
	public function cadaEncuestaServicio($id)
	{
		#Log::debug('------------------------------------------------------------------------------------------------------');
		#Log::debug($id);
		$consulta = registro::where('id_registro',$id)->first();
		#Log::debug('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>');
		#Log::debug($consulta);
		return view("callcenter.llenado", compact('consulta'));
	}
	public function guardaEncuesta()
	{
		return view("Post");
	}
	public function ventas()
	{
		return view('callcenter/ventas');
	}
	public function cargaBase()
	{
		return view('callcenter/carga');
	}
	public function postBase(Request $request)
	{
		if(!\Input::file("base"))
    	{
        	return redirect('/')->with('error-message', 'Donde veo este prro mensaje?');
    	}
		$file = $request->file('base');
		$nombre = $file->getClientOriginalName();
		Excel::load($file, function($reader)
		{
			foreach ($reader->get() as $base)
			{
				return $base;
				/*registro::create([
					'concesionaria' => $base->No_Concesionario,
					'empresa' =>$base->Empresa,
					'razon_social' =>$base->RazonSocial,
					'nombre' =>$base->Nombre,
					'ap_paterno' =>$base->Apellido,
					'ap_materno' =>$base->ApellidoMaterno,
					'sexo' =>$base->Sexo,
					'estado' =>$base->Estado,
					'ciudad' =>$base->Ciudad,
					'calle' =>$base->Calle,
					'num' =>$base->Numero,
					'colonia' =>$base->Colonia,
					'municipio' =>$base->DelegacionMunicipio,
					'codigo_postal' =>$base->CP,
					'lada' =>$base->Lada,
					'telefono1' =>$base->Telefono1,
					'ext1' =>$base->Ext1,
					'lada_cel' =>$base->Lada_Celular,
					'lada3' =>$base->Lada3,
					'celular' =>$base->Celular,
					'telefono3' =>$base->Telefono3,
					'lada4' =>$base->Lada4,
					'telefono4' =>$base->Telefono4,
					'email' =>$base->Mail,
					'email2' =>$base->Mail2,
					'nombre_contacto' =>$base->Nombre_Contacto,
					'app_contacto' =>$base->Apellido_Contacto,
					'apm_contacto' =>$base->Apellido_Materno_Contacto,
					'lada_contacto' =>$base->Lada_Contacto,
					'telofono_contacto' =>$base->Telefono_Contacto,
					'nombre_modelo' =>$base->NombreModelo,
					'modelo' =>$base->Modelo,
					'chasis' =>$base->Chasis,
					'placa' =>$base->Placa,
					'fecha_entrada' =>$base->FechaEntrada,
					'fecha_servicio' =>$base->FechaServicio,
					'KM' =>$base->Km,
					'tipo_servicio' =>$base->TipoServicio,
					'costo' =>$base->Costo,
					'no_orden' =>$base->NoOrden,
					'fecha_insercion' =>$base->FechaInsercion,
					'ano_modelo' =>$base->AñoModelo,
					'nombre_asesor' =>$base->AsesorNombre,
					'app_asesor' =>$base->AsesorApP,
					'apm_asesor' =>$base->AsesorApM,
					'tecnico' =>$base->Tecnico,
					'contactable' =>$base->Contacto,
					'cache' =>$base->Comentarios
				]);*/
			}
		});
		#return registro::all();
	}
}