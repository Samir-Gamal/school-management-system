<?php

namespace Database\Factories;

use App\Models\Fee;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {

        $date = Carbon::now()->subDays(random_int(1, 90));
        $faker_ar = \Faker\Factory::create('ar_JO');// create a Arabic faker

        return [
            'id' => $this->faker->uuid,
            'title' => ['en' => $this->faker->realText(20),  'ar'=>$faker_ar->realText(20)],
            'amount' => $this->faker->numberBetween(10000,300000),
            'classroom_id' => null,
            'grade_id' => null,
            'description' => $this->faker->sentence(12),
            'year' =>Carbon::now()->year,
            'type' => null,
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date)
        ];
    }

}
