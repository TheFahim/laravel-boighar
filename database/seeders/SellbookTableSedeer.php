<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sellbook;

class SellbookTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        sellbook::factory(10)->create();
    }
}
