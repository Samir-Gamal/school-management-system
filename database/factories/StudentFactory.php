<?php

namespace Database\Factories;

use App\Models\Student;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

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
            'name' => ['en' => $this->faker->name(), 'ar' => $faker_ar->name()],
            'email' => $this->faker->unique()->email,
            'password' => null,
            'gender_id' => null,
            'nationality_id' => null,
            'blood_type_id' => null,
            'grade_id' => null,
            'classroom_id' => null,
            'section_id' => null,
            'guardian_id' => null,
            'birthday' => Carbon::now()->subYear(random_int(7, 18)),
            'academic_year' => Carbon::now()->year,
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date),
            'deleted_at' => null
        ];
    }

}
