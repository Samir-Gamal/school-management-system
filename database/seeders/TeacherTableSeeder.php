<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Specialization;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456789');

        $specializations = Specialization::all();
        $genders = Gender::all();

        $teachers=[];
        for ($i = 0; $i < 100; $i++) {
            $teacher = Teacher::factory()->make([
                'password' => $password,
                'specialization_id' => $specializations->random()->id,
                'gender_id' => $genders->random()->id,
            ])->
            toArray();
            $teacher['name'] = json_encode($teacher['name']);

            $teachers[] = $teacher;
            $teacher = null;
        }
       Teacher::insert($teachers);
    }
}
