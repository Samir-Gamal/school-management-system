<?php

use Database\Seeders\BloodTableSeeder;
use Database\Seeders\ClassroomTableSeeder;
use Database\Seeders\FeeTableSeeder;
use Database\Seeders\GenderTableSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\NationalityTableSeeder;
use Database\Seeders\GuardianTableSeeder;
use Database\Seeders\ReligionTableSeeder;
use Database\Seeders\SectionTableSeeder;
use Database\Seeders\SpecializationTableSeeder;
use Database\Seeders\StudentTableSeeder;
use Database\Seeders\SubjectTableSeeder;
use Database\Seeders\TeacherTableSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(SectionTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(NationalityTableSeeder::class);
        $this->call(ReligionTableSeeder::class);
        $this->call(SpecializationTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(TeacherTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(GuardianTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(FeeTableSeeder::class);
    }
}
