<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {



        $exams=[];
        for ($i = 0; $i < 30; $i++) {
            $exam = Exam::factory()->make([])->
            toArray();
            $exam['name'] = json_encode($exam['name']);
            gc_collect_cycles();
            $exams[] = $exam;
            $exam = null;
        }
        Exam::insert($exams);
    }
}
