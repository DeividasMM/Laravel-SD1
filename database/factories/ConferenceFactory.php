<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConferenceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(3),
            'date' => fake()->dateTimeBetween('now', '+6 months')->format('Y-m-d'),
            'time' => '10:00',
            'address' => fake()->city() . ', ' . fake()->streetAddress(),
            'lecturers' => fake()->name() . ', ' . fake()->name(),
        ];
    }
}
