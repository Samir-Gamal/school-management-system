<?php

namespace Database\Factories;

use App\Models\Receipt;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {

        $date = Carbon::now()->subDays(random_int(1, 90));

        return [
            'id' => $this->faker->uuid,
            'date' =>$date,
            'student_id' =>null,
            'debit' =>$this->faker->numberBetween(5,150)*1000,
            'description' =>$this->faker->sentence(),
            'created_at' => $date,
            'updated_at' => $this->faker->dateTimeBetween($date)
        ];
    }

}
