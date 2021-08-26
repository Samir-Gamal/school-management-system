<?php

namespace Database\Factories;

use App\Models\Subject;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

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
            'name' => ['en' => $this->faker->realText(20), 'ar' => $faker_ar->realText(20)],
            'grade_id' => null,
            'classroom_id' => null,
            'teacher_id' => null,
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date)
        ];
    }

}
