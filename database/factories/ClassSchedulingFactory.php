<?php

namespace Database\Factories;

use App\Models\ClassScheduling;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassSchedulingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassScheduling::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject_id' => $this->faker->randomDigitNotNull,
        'level_id' => $this->faker->randomDigitNotNull,
        'classroom_id' => $this->faker->randomDigitNotNull,
        'day_id' => $this->faker->randomDigitNotNull,
        'teacher_id' => $this->faker->randomDigitNotNull,
        'start_time' => $this->faker->randomDigitNotNull,
        'end_time' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
