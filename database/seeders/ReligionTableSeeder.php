<?php
namespace Database\Seeders;
use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $religions = [

            [
                'en'=> 'Muslim',
                'ar'=> 'مسلم'
            ],
            [
                'en'=> 'Christian',
                'ar'=> 'مسيحي'
            ],
            [
                'en'=> 'Other',
                'ar'=> 'غيرذلك'
            ],

        ];
        $religions_data_seed = [];
        foreach ($religions as $religion) {

            $fake_religion = Religion::factory()->make([
                'name' => $religion
            ])->toArray();
            $fake_religion['name'] = json_encode($fake_religion['name']);
            $religions_data_seed[] = $fake_religion;
        }

        DB::table('religions')->insert($religions_data_seed);

    }
}
