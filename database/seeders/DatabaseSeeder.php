<?php

use Database\Seeders\BloodTableSeeder;
use Database\Seeders\ClassroomTableSeeder;
use Database\Seeders\GenderTableSeeder;
use Database\Seeders\GradeSeeder;
use Database\Seeders\NationalitiesTableSeeder;
use Database\Seeders\ParentsTableSeeder;
use Database\Seeders\religionTableSeeder;
use Database\Seeders\SectionsTableSeeder;
use Database\Seeders\SpecializationsTableSeeder;
use Database\Seeders\StudentsTableSeeder;
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
        $this->call(SectionsTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(religionTableSeeder::class);
        $this->call(SpecializationsTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(ParentsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
    }
}
