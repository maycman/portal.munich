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
    public function testEncuesta()
    {
        //Having
        //When
        $this->visit("encuesta")
        	//Then
        	->see("Encabezado");
    }
}
