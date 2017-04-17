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
        	->see("Contenido");
    }
    public function testEncuesta()
    {
    	//When
    	$this->visit("encuesta")
    		//Then
    		->see("Encuesta");
    }
    public function testNotas()
    {
    	//When
    	$this->visit("notas")
    		//Then
    		->see("Notas");
    }
}