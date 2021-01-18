<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countryCount = env('SEED_COUNTRY_COUNT', 3);
        $roleCount = env('SEED_ROLE_COUNT', 3);
        return [
            'name' => $this->faker->name,
            'password' => Hash::make('password'),
            'email' => $this->faker->safeEmail,
            'last_online' => Carbon::now()->subMinutes(rand(1, 10) * 60),
            'country_id' => rand(1, $countryCount),
            'role_id' => rand(1, $roleCount)
        ];
    }
}