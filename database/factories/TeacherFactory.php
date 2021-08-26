<?php

namespace Database\Factories;

use App\Models\Teacher;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

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
            'name' => ['en' => $this->faker->name('male'), 'ar' => $faker_ar->name('male')],
            'address' => $this->faker->address,
            'specialization_id' => null,
            'gender_id' => null,
            'joining_at' => $date->subDays(random_int(5, 15)),
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date)
        ];
    }

}
