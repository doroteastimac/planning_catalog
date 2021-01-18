<?php

namespace Database\Factories;

use Carbon\Carbon;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => Str::random(5),
            'native_name' => Str::random(5)
        ];
    }
}