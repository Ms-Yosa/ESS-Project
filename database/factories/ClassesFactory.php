<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_name' => $this->faker->word,
            'class_code' => $this->faker->unique()->numberBetween(1, 20),
            'level' => $this->faker->word,
            // 'user_id' =>  \App\Models\User::all()->random()->id,
            'faculty_id' =>  1,
            'day_id' => 2,
            'start_time' => $this->faker->word,
            'end_time' => $this->faker->word,
            'deleted_at' => null,
            'created_at' => null,
            'updated_at' => null

        ];
    }
}
