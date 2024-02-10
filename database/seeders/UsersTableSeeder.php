<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 100 admins
        for ($i = 0; $i < 100; $i++) {
            $email = 'user' . $i . '@convertedin.com'; // Unique domain
            User::create([
                'name' => $faker->name,
                'email' => $email,
                'password' => Hash::make('password'), // You can set a default password if needed
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
