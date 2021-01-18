<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['name' => 'Croatia', 'native_name' => 'Hrvatska'],
            ['name' => 'Germany', 'native_name' => 'Deutschland'],
            ['name' => 'Serbia', 'native_name' => 'Srbija']
        ]);

        /* unos random zemalja */
        $numberOfCountries = env('SEED_COUNTRY_COUNT', 4) - 3; /* broj zemalja minus 3 zemlje unesene iznad */
        Country::factory()
            ->count($numberOfCountries)
            ->create();
    }
}