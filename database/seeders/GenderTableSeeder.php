<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $genders = [
            ['en' => 'Male', 'ar' => 'ذكر'],
            ['en' => 'Female', 'ar' => 'انثي'],

        ];
        $genders_data_seed = [];
        foreach ($genders as $genders) {

            $fake_gender = Gender::factory()->make([
                'name' => $genders
            ])->toArray();
            $fake_gender['name'] = json_encode($fake_gender['name']);
            $genders_data_seed[] = $fake_gender;
        }

        DB::table('genders')->insert($genders_data_seed);

    }
}
