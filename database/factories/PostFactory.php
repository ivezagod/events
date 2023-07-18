<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->words(3,true),
            'body'=>fake()->paragraphs(3,true),
            'published'=>fake()->boolean(50),
            'user_id'=>fake()->numberBetween(1,20),
        ];
    }
}
