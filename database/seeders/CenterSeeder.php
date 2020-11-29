<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert([
            'center_code' => '0427',
            'center_name'=> 'Jankomir ',
            'center_address'=> 'Kovinska 1, 10000 Zagreb'

            
        ]);
    }
}
