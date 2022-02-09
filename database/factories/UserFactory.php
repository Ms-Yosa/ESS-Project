<?php

namespace Database\Factories;

use App\Models\User;
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
     */
    public function definition()
    {
        return [
            'surname' => $this->faker->name(),
            'name' => $this->faker->name(),
            'middle_name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'age' => 1,
            'gender' => 'Male',
            'birth_year' => '2010',
            'birth_month' => 'November',
            'birth_day' => '30',
            'religion' => 'Catholic',
            'student_bloodtype' => 'A',
            'guardian_surname' => 'Test',
            'guardian' => 'Test',
            'guardian_middle_name' => 'Test',
            'contact_number' => '09478481554',
            'relation' => 'Mother',
            'guardian_bloodtype' => 'A',
            'address' => 'test address',
            'class_id' => \App\Models\Classes::all()->random()->class_id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
