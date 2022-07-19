<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sellbook;
use App\Models\requestbook;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           SellbookTableSedeer::class,
           RequestbookTableSedeer::class,
           UserTableSeeder::class
        ]);
        // sellbook::create([
        //    'booktitle'=>'English',
        //    'bookauthor'=>'nadim',
        //    'bookedition'=>'5th',
        //    'bookquantity'=>'1',
        //    'price'=>'120',
        //    'mobile'=>'01305758268',
        //    'bookimage'=>'sql.jpg'
        // ]);
        // requestbook::create([
        //    'booktitle'=>'SQL',
        //    'bookauthor'=>'nadim',
        //    'bookedition'=>'5th',
        //    'bookquantity'=>'1',
        //    'price'=>'120',
        //    'mobile'=>'01305758268',
        //    'address'=>'dhaka',
        //    'bookimage'=>'sql.jpg'
        // ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
