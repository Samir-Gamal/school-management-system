<?php

namespace Database\Seeders;

use App\Models\BloodType;
use App\Models\Guardian;
use App\Models\Nationality;
use App\Models\Religion;
use Illuminate\Database\Seeder;

class GuardianTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456789');

        $nationalities = Nationality::all();
        $blood_types = BloodType::all();
        $religions = Religion::all();
        $guardians=[];
        for ($i = 0; $i < 100; $i++) {
            $nationality_id = $nationalities->random()->id;
            $guardian = Guardian::factory()->make([
                'password' => $password,
                'father_nationality_id' => $nationality_id,
                'father_blood_type_id' => $blood_types->random()->id,
                'father_religion_id' => $religions->random()->id,
                'mother_nationality_id' => $nationality_id,
                'mother_blood_type_id' => $blood_types->random()->id,
                'mother_religion_id' => $religions->random()->id,
            ])->
            toArray();
            $guardian['father_name'] = json_encode($guardian['father_name']);
            $guardian['father_job'] = json_encode($guardian['father_job']);
            $guardian['mother_name'] = json_encode($guardian['mother_name']);
            $guardian['mother_job'] = json_encode($guardian['mother_job']);
            gc_collect_cycles();
            $guardians[] = $guardian;
            $guardian = null;
        }
       Guardian::insert($guardians);
    }
}
