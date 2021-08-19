<?php
namespace Database\Factories;

use App\Models\Grade;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {

        $date = Carbon::now()->subDays(random_int(1,90));

        return [
            'id'=>$this->faker->uuid,
            'name' => $this->faker->name,
            'created_at' =>$date,
            'updated_at' =>$this->faker->dateTimeBetween($date)
        ];
    }

}
