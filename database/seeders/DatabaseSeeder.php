<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Pharmacist;
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
        // \App\Models\User::factory(10)->create();
        Doctor::factory(10)->create();
        Nurse::factory(10)->create();
        Patient::factory(50)->create();
        Pharmacist::factory(10)->create();
        
    }
}
