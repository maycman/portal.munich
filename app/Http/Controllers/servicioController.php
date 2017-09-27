<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\auto;

class servicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos =auto::where('estado','')->orWhere('estado',null)->orderBy('id_auto', 'DESC')->paginate(40);
        return view("autos.list", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_llegada = formatDate($request->fecha_llegada);
        $fecha_ultimo_servicio = formatDate($request->fecha_ultimo_servicio);
        $fecha_servicio_pendiente = formatDate($request->fecha_servicio_pendiente);
        $fecha_proximo_servicio = formatDate($request->fecha_proximo_servicio);
        $row = new auto;
        $row->fecha_llegada = $fecha_llegada;
        $row->chasis = $request->chasis;
        $row->tipo_auto = $request->tipo_auto;
        $row->ultimo_servicio = $request->ultimo_servicio;
        $row->fecha_ultimo_servicio = $fecha_ultimo_servicio;
        $row->servicio_pendiente = $request->servicio_pendiente;
        $row->fecha_servicio_pendiente = $fecha_servicio_pendiente;
        $row->proximo_servicio = $request->proximo_servicio;
        $row->fecha_proximo_servicio = $fecha_proximo_servicio;
        $row->save();
        \Alert::message('Nuevo auto cargado', 'info');
        return redirect()->to('4semanas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = auto::where('id_auto', $id)->first();
        return view('autos.edit', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nuevaFechaLlegada = formatDate($request->fecha_llegada);
        $nuevoChasis = $request->chasis;
        $ultimo_servicio = $request->ultimo_servicio;
        $fecha_ultimo_servicio = formatDate($request->fecha_ultimo_servicio);
        $servicio_pendiente = $request->servicio_pendiente;
        $fecha_servicio_pendiente = formatDate($request->fecha_servicio_pendiente);
        $proximo_servicio = $request->proximo_servicio;
        $fecha_proximo_servicio = formatDate($request->fecha_proximo_servicio);
        $tecnico = $request->tecnico;

        //Database
        $id=$request->id_auto;
        $row = auto::find($id);
        $row->fecha_llegada = $nuevaFechaLlegada;
        $row->chasis = $nuevoChasis;
        $row->ultimo_servicio = $ultimo_servicio;
        $row->fecha_ultimo_servicio = $fecha_ultimo_servicio;
        $row->servicio_pendiente = $servicio_pendiente;
        $row->fecha_servicio_pendiente = $fecha_servicio_pendiente;
        $row->proximo_servicio = $proximo_servicio;
        $row->fecha_proximo_servicio = $fecha_proximo_servicio;
        $row->tecnico = $tecnico;
        $row->save();
        \Alert::message('Datos actualizados correctamente', 'success');
        return redirect()->to('4semanas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = auto::find($id);
        $row->estado = "concluido";
        $row->save();
        \Alert::message('Auto liberado', 'success');
        return redirect()->to('4semanas');
    }
}
