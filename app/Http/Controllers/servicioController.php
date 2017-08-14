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
        $datos = auto::all();
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
        $fecha_proximo_servicio = formatDate($request->fecha_proximo_servicio);
        $row = new auto;
        $row->fecha_llegada = $fecha_llegada;
        $row->chasis = $request->chasis;
        $row->tipo_auto = $request->tipo_auto;
        $row->ultimo_servicio = $request->ultimo_servicio;
        $row->fecha_ultimo_servicio = $fecha_ultimo_servicio;
        $row->servicio_pendiente = $request->servicio_pendiente;
        $row->proximo_servicio = $request->proximo_servicio;
        $row->fecha_proximo_servicio = $fecha_proximo_servicio;
        $row->save();
        \Alert::message('Nuevo auto cargado', 'info');
        return redirect()->to('/');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
