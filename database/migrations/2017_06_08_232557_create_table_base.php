<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id_registro');
            $table->mediumText('concesionaria');
            $table->mediumText('empresa');
            $table->mediumText('razon_social');
            $table->mediumText('nombre');
            $table->mediumText('ap_paterno');
            $table->mediumText('ap_materno');
            $table->mediumText('sexo');
            $table->mediumText('estado');
            $table->mediumText('ciudad');
            $table->mediumText('calle');
            $table->mediumText('num');
            $table->mediumText('colonia');
            $table->mediumText('municipio');
            $table->mediumText('codigo_postal');
            $table->mediumText('lada');
            $table->mediumText('telefono1');
            $table->mediumText('ext1');
            $table->mediumText('lada_cel');
            $table->mediumText('lada3');
            $table->mediumText('celular');
            $table->mediumText('telefono3');
            $table->mediumText('lada4');
            $table->mediumText('telefono4');
            $table->mediumText('email');
            $table->mediumText('email2');
            $table->mediumText('nombre_contacto');
            $table->mediumText('app_contacto');
            $table->mediumText('apm_contacto');
            $table->mediumText('lada_contacto');
            $table->mediumText('telofono_contacto');
            $table->mediumText('nombre_modelo');
            $table->mediumText('modelo');
            $table->mediumText('chasis');
            $table->mediumText('placa');
            $table->mediumText('fecha_entrada');
            $table->mediumText('fecha_servicio');
            $table->mediumText('KM');
            $table->mediumText('tipo_servicio');
            $table->mediumText('costo');
            $table->mediumText('no_orden');
            $table->mediumText('fecha_insercion');
            $table->mediumText('ano_modelo');
            $table->mediumText('nombre_asesor');
            $table->mediumText('app_asesor');
            $table->mediumText('apm_asesor');
            $table->mediumText('tecnico');
            $table->mediumText('contactable');
            $table->mediumText('cache'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registro');
    }
}
