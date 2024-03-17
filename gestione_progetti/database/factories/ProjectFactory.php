<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $types = ['Front-End', 'Back-End'];
        return [
            'name' => fake()->text(30),
            'description' => fake()->text(200),
            'type' => fake()->randomElement($types),
            'user_id' => User::get()->random()->id,
        ];
    }
}
