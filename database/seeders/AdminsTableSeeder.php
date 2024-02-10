<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 100 admins
        for ($i = 0; $i < 100; $i++) {
            $email = 'admin' . $i . '@convertedin.com'; // Unique domain
            Admin::create([
                'name' => $faker->name,
                'email' => $email,
                'password' => Hash::make('password'), // You can set a default password if needed
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
