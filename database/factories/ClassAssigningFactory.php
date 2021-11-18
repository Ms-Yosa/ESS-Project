<?php

namespace Database\Factories;

use App\Models\ClassAssigning;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassAssigningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassAssigning::class;

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
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
