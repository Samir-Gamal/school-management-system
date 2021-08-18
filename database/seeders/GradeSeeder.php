<?php
namespace Database\Seeders;
use App\Models\Grade;
use Illuminate\Database\Seeder;

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
            ['en'=> 'Primary stage', 'ar'=> 'المرحلة الابتدائية'],
            ['en'=> 'middle School', 'ar'=> 'المرحلة الاعدادية'],
            ['en'=> 'High school', 'ar'=> 'المرحلة الثانوية'],
        ];

        foreach ($grades as $grade) {
            Grade::create(['name' => $grade]);
        }

    }
}
