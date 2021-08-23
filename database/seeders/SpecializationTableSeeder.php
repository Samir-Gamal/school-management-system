<?php
namespace Database\Seeders;
use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            ['en'=> 'Arabic', 'ar'=> 'عربي'],
            ['en'=> 'Sciences', 'ar'=> 'علوم'],
            ['en'=> 'Computer', 'ar'=> 'حاسب الي'],
            ['en'=> 'English', 'ar'=> 'انجليزي'],
        ];
        $specializations_data_seed = [];
        foreach ($specializations as $specialization) {

            $fake_specialization = Specialization::factory()->make([
                'name' => $specialization
            ])->toArray();
            $fake_specialization['name'] = json_encode($fake_specialization['name']);
            $specializations_data_seed[] = $fake_specialization;
        }

        DB::table('specializations')->insert($specializations_data_seed);

    }
}
