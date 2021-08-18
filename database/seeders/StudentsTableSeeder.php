<?php
namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Guardian;
use App\Models\Nationalitie;
use App\Models\Section;
use App\Models\Student;
use App\Models\BloodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $students = new Student();
        $students->name = ['ar' => 'احمد ابراهيم', 'en' => 'Ahmed Ibrahim'];
        $students->email = 'Ahmed_Ibrahim@yahoo.com';
        $students->password = Hash::make('12345678');
        $students->gender_id = 1;
        $students->nationalitie_id = Nationalitie::all()->unique()->random()->id;
        $students->blood_id =BloodType::all()->unique()->random()->id;
        $students->date_birth = date('1995-01-01');
        $students->grade_id = Grade::all()->unique()->random()->id;
        $students->classroom_id =Classroom::all()->unique()->random()->id;
        $students->section_id = Section::all()->unique()->random()->id;
        $students->parent_id = Guardian::all()->unique()->random()->id;
        $students->academic_year ='2021';
        $students->save();
    }
}
