<?php

use Illuminate\Database\Seeder;
use App\auto;

class autoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(auto::class)->times(100)->create();
    }
}