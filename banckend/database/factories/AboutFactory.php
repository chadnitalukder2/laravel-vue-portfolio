<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'short_title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'complete_project' => $this->faker->numberBetween(1, 100),
            'year_experience' => $this->faker->numberBetween(1, 20),
        ];
    }
}
