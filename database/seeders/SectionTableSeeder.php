<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $sections = [
            ['en' => 'a', 'ar' => 'ا'],
            ['en' => 'b', 'ar' => 'ب'],
            ['en' => 'c', 'ar' => 'ت'],
        ];
        $sections_data_seed = [];
        $grades = Grade::all();
        $classrooms = Classroom::all();
        foreach ($sections as $section) {

            $fake_section = Section::factory()->make([
                'name' => $section,
                'grade_id' => $grades->unique()->random()->id,
                'classroom_id' => $classrooms->unique()->random()->id
            ])->toArray();
            $fake_section['name'] = json_encode($fake_section['name']);
            $sections_data_seed[] = $fake_section;
        }

        DB::table('sections')->insert($sections_data_seed);


    }
}
