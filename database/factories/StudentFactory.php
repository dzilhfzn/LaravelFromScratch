<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'student_ic' => $this->faker->randomNumber(5, true),
            'student_name' => $this->faker->name()
        ];
    }
}
