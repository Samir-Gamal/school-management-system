<?php
namespace Database\Seeders;
use App\Models\BloodType;
use App\Models\Classroom;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Guardian;
use App\Models\Nationality;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
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
        $genders = Gender::all();
        $grades = Grade::all();
        $blood_types = BloodType::all();
        $classrooms = Classroom::all();
        $sections = Section::all();
        $guardians = Guardian::all();
        $students=[];
        for ($i = 0; $i < 100; $i++) {
            $student = Student::factory()->make([
                'password' => $password,
                'gender_id' => $genders->random()->id,
                'nationality_id' =>  $nationalities->random()->id,
                'blood_id' => $blood_types->random()->id,
                'grade_id' => $grades->random()->id,
                'classroom_id' => $classrooms->random()->id,
                'section_id' => $sections->random()->id,
                'guardian_id' => $guardians->random()->id,
            ])->
            toArray();
            $student['name'] = json_encode($student['name']);

            $students[] = $student;
            $student = null;
        }
        Student::insert($students);
    }
}
