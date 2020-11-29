<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_customer')->insert([
            'customer_type' => '1',
            'article_id' => '1',
            'customer_id' => '1',
            
            
                       
        ]);
    }
}
