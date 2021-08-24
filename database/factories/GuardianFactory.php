<?php

namespace Database\Factories;

use App\Models\Guardian;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guardian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        $date = Carbon::now()->subDays(random_int(1, 90));
        $faker_ar = \Faker\Factory::create('ar_JO');// create a Arabic faker
        return [
            'id' => $this->faker->uuid,
            'email' => $this->faker->unique()->email,
            'password' => null,
            'father_name' => ['en' => $this->faker->name('male'), 'ar' => $faker_ar->name('male')],
            'father_national_id' => $this->faker->numberBetween(800016551111111, 800099551111111),
            'father_passport_id' => $this->faker->numberBetween(405111111, 405991111),
            'father_job' => ['en' => $this->faker->jobTitle, 'ar' => $faker_ar->jobTitle],
            'father_phone' => $this->faker->phoneNumber,
            'father_nationality_id' => null,
            'father_blood_type_id' => null,
            'father_religion_id' => null,
            'father_address' => $this->faker->address,
            'mother_name' => ['en' => $this->faker->name('female'), 'ar' => $faker_ar->name('female')],
            'mother_national_id' => $this->faker->numberBetween(800016551111111, 800099551111111),
            'mother_passport_id' => $this->faker->numberBetween(405111111, 405991111),
            'mother_job' => ['en' => $this->faker->jobTitle, 'ar' => $faker_ar->jobTitle],
            'mother_phone' => $this->faker->phoneNumber,
            'mother_nationality_id' => null,
            'mother_blood_type_id' => null,
            'mother_religion_id' => null,
            'mother_address' => $this->faker->address,
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date)
        ];
    }

}
