<?php
namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

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
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' =>null,
            'remember_token' => Str::random(10),
            'created_at' =>$date,
            'updated_at' =>$this->faker->dateTimeBetween($date)
        ];
    }

}
