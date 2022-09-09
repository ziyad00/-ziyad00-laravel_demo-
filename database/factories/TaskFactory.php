<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\User;
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
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'description' =>  fake()->name(),
            'assigned_to_id' => fake()->unique()->numberBetween(1, User::count()),
            'assigned_by_id' => fake()->unique()->numberBetween(1, User::count()), 
        ];
    }
}
