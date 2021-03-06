<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\registro;

class encuestaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInicio()
    {
        //Having
        //When
        $this->visit("/")
        	//Then
        	->see("Inicio");
    }
    public function testEncuesta()
    {
    	//When
    	$this->visit("encuesta")
    		//Then
    		->see("Gestión de encuestas");
    }
    public function testCarga()
    {
    	//When
    	$this->visit("carga")
    		//Then
    		->see("Cargar Base");
    }
    public function testEncuestaServicio()
    {
    	//When
    	$this->visit("encuesta/servicio")
    		//Then
    		->see("Encuestas de servicio");
    }
}