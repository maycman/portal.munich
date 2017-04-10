<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\nota;

class notasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	//Having
        nota::create(["nota"=>"Mi primera nota"]);
        nota::create(["nota"=>"Segunda nota"]);
        //When
        $this->visit('notas')
        	//Then
        	->see("Mi primera nota")
        	->see("Segunda nota");
    }
}
