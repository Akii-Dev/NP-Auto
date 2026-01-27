<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Occasion>
 */
class OccasionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->sentence(3), // this is 3 words
            'price' => fake()->randomFloat(2, 1000, 20000), // 2 decimal price. max price is €20000
            'plate' => fake()->unique()->word(), // this is until we find a way to generate actual dutch license plates. dont api call these
            'description' => fake()->paragraph(), // about 3 sentences
            'mileage' => fake()->numberBetween(0, 1000000), // milly km
        ];
    }
}
