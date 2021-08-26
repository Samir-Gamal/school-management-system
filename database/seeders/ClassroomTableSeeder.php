<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTableSeeder extends Seeder
{

    public function run()
    {
        $classrooms = [
            ['en' => 'First grade', 'ar' => 'الصف الاول'],
            ['en' => 'Second grade', 'ar' => 'الصف الثاني'],
            ['en' => 'Third grade', 'ar' => 'الصف الثالث'],
        ];

        $classrooms_data_seed = [];
        $grades = Grade::all();
        foreach ($classrooms as $classroom) {

            $fake_classroom = Classroom::factory()->make([
                'name' => $classroom,
                'grade_id' => $grades->unique()->random()->id
            ])->toArray();
            $fake_classroom['name'] = json_encode($fake_classroom['name']);
            $classrooms_data_seed[] = $fake_classroom;
        }

        DB::table('classrooms')->insert($classrooms_data_seed);
    }
}
