<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* unos admina */
        User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

       

    }
}