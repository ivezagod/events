<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->word(),
            'priority' =>fake()->randomElement(['low','medium','high']),
            'due_date'=>fake()->dateTimeBetween('now','+20 days'),
            'is_completed'=>fake()->boolean(60)
        ];
    }
}
