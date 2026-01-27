<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(), // about 3 words
            'price' => fake()->randomFloat(2, 10, 999.99), // 2 decimal price between 10 and 999.99
            'description' => fake()->paragraph(), // about 3 sentences
        ];
    }
}
