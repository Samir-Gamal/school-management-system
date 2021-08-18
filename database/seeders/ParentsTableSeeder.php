<?php
namespace Database\Seeders;
use App\Models\Guardian;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\BloodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
            $my_parents = new Guardian();
            $my_parents->email = 'samir.gamal77@yahoo.com';
            $my_parents->password = Hash::make('12345678');
            $my_parents->father_name = ['en' => 'samirgamal', 'ar' => 'سمير جمال'];
            $my_parents->father_national_id = '1234567810';
            $my_parents->father_passport_id = '1234567810';
            $my_parents->father_phone = '1234567810';
            $my_parents->father_job = ['en' => 'programmer', 'ar' => 'مبرمج'];
            $my_parents->father_nationality_id = Nationalitie::all()->unique()->random()->id;
            $my_parents->father_blood_type_id =BloodType::all()->unique()->random()->id;
            $my_parents->father_religion_id = Religion::all()->unique()->random()->id;
            $my_parents->father_address ='القاهرة';
            $my_parents->mother_name = ['en' => 'SS', 'ar' => 'سس'];
            $my_parents->mother_national_id = '1234567810';
            $my_parents->mother_passport_id = '1234567810';
            $my_parents->mother_phone = '1234567810';
            $my_parents->mother_job = ['en' => 'Teacher', 'ar' => 'معلمة'];
            $my_parents->mother_nationality_id = Nationalitie::all()->unique()->random()->id;
            $my_parents->mother_blood_type_id =BloodType::all()->unique()->random()->id;
            $my_parents->mother_religion_id = Religion::all()->unique()->random()->id;
            $my_parents->mother_address ='القاهرة';
            $my_parents->save();

    }
}
