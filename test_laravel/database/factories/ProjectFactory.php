<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->text(30),
            'year' => fake()->numberBetween(2010,2024),
            'user_id' => User::get()->random()->id,
            'activity_id' => Activity::get()->random()->id,
            'created_at' => fake()->datetime()
            
        ];
    }
}
