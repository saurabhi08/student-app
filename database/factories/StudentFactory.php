<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'course' => $this->faker->randomElement(['Web Development', 'Databases', 'Networking', 'Security', 'Algorithms']),
        ];
    }
}
