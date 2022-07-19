<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\requestbook;
use Database\Factories\RequestbookFactory;

class RequestbookTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         requestbook::factory(20)->create();
        
    }
}
