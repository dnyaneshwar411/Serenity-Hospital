<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\patient_appointments;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // users::class
        ]);
        $faker = faker::create();

        \App\Models\User::factory(5)->create();

        for ($i = 0; $i < 10; $i++) {
            \App\Models\User::factory()->create([
                'name' => 'Dr. ' . $faker->name,
                'email' =>  $faker->email,
                'phone_no' =>  '9067183889',
                'password' =>  '$2y$10$GBJVivJ0JOCsJGZW.DAogeMOxlSo43H/DnU2/XFvC5qJkLZxr45Ya', //12345678
                'user_type' => 'doctor',
            ]);
        }
    }
}
