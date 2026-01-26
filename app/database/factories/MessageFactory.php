<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(), // completely random title
            'name' => fake()->name(), // john or something
            'email' => fake()->safeEmail(), // safe email means a random valid mail
            'phone' => fake()->phoneNumber(), // not necessarily a dutch formatted phone number
            'content' => fake()->paragraph(), // about 3 sentences
        ];
    }
}
