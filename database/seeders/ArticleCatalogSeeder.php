<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_catalog')->insert([
            'sales_count' => '5670',
            'article_id' => '1',
            'catalog_id' => '1',
                       
                        
        ]);
    }
}
