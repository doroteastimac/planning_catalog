<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            'starts_at' => '2020-11-23',
            'ends_at' => '2020-12-05',
            'catalog_type_id' => '1',
            
        ]);
    }
}
