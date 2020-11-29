<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producers')->insert([
            'producer_code' => '0001523',
            'producer_name'=> 'Kraš d.o.o'
            

            
        ]);
    }
}
