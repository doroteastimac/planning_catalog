<?php

namespace Database\Seeders;
use Database\Seeders\CatalogTypeSeeder;
use Illuminate\Database\Seeder;

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
            CatalogTypeSeeder::class,
            CenterSeeder::class,
            CustomerSeeder::class,
            ProducerSeeder::class,
            ArticleSeeder::class,
            CatalogSeeder::class,
            ArticleCatalogSeeder::class,
            ArticleCenterSeeder::class,
            ArticleCustomerSeeder::class,
            CountrySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
              ]);
    }
}
