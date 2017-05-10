<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\portal;

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
    /*public function testNotas()
    {
    	//When
    	$this->visit("notas")
    		//Then
    		->see("Notas");
    }*/
    public function testEncuestaServicio()
    {
    	//When
    	$this->visit("encuesta/servicio")
    		//Then
    		->see("Encuestas de servicio");
    }
    public function testEncuestaVentas()
    {
    	//When
    	$this->visit("encuesta/ventas")
    		//Then
    		->see("Encuestas de ventas");
    }
}