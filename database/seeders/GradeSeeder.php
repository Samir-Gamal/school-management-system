<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            ['en' => 'Primary stage', 'ar' => 'المرحلة الابتدائية'],
            ['en' => 'middle School', 'ar' => 'المرحلة الاعدادية'],
            ['en' => 'High school', 'ar' => 'المرحلة الثانوية'],
        ];
        $grades_data_seed = [];
        foreach ($grades as $grade) {

            $fake_grade = Grade::factory()->make([
                'name' => $grade
            ])->toArray();
            $fake_grade['name'] = json_encode($fake_grade['name']);
            $grades_data_seed[] = $fake_grade;
        }

        DB::table('grades')->insert($grades_data_seed);


    }
}
