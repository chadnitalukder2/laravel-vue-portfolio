<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Header>
 */
class HeaderFactory extends Factory
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
            'short_title' => $this->faker->sentence(2),
            'short_desc' => $this->faker->sentence(6),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
