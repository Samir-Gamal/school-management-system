<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $classrooms = Classroom::all();
        $grades = Grade::all();;
        $teachers = Teacher::all();

        $subjects=[];
        for ($i = 0; $i < 30; $i++) {
            $subject = Subject::factory()->make([
                'grade_id' => $grades->random()->id,
                'classroom_id' => $classrooms->random()->id,
                'teacher_id' => $teachers->random()->id,
            ])->
            toArray();
            $subject['name'] = json_encode($subject['name']);
            gc_collect_cycles();
            $subjects[] = $subject;
            $subject = null;
        }
       Subject::insert($subjects);
    }
}
