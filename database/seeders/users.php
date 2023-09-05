<?php

namespace Database\Seeders;

use App\Models\patient_appointments;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();

        for ($i = 0; $i < 10; $i++) {
            // \App\Models\patient_appointments::factory()->create([
            $appoin = new patient_appointments();
            $appoin['user_id'] = $i;
            $appoin['patient_name'] = $faker->name;
            $appoin['patient_id'] = 1;
            $appoin['patient_email'] =  $faker->email;
            $appoin['patient_phone_no'] =  '9067183889';
            $appoin['patient_date_of_appointment'] =  $faker->date;
            $appoin['appointment_reason'] =  'I am ill';
            $appoin->save();
            // ]);
        }
    }
}
