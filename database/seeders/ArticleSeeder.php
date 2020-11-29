<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'article_code' => '90045639',
            'article_name' => 'Dorina mliječna 80g',
            'article_tp' => '25',
            'article_pal' => '500',
            'category' => 'Pakirana',
            'producer_id' => '1'
            
                       
        ]);
    }
}
