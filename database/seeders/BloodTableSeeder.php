<?php

namespace Database\Seeders;

use App\Models\BloodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $blood_types = ['O-', 'O+', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];

        $blood_types_data_seed = [];
        foreach ($blood_types as $blood_type) {

            $blood_types_data_seed[] = BloodType::factory()->make([
                'name' => $blood_type
            ])->toArray();


        }

        DB::table('blood_types')->insert($blood_types_data_seed);

    }
}
