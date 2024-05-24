<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo_img' => $this->faker->imageUrl(640, 480, 'business', true), // Generating a fake image URL
            'short_desc' => $this->faker->sentence,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'facebook' => $this->faker->url,
            'github' => $this->faker->url,
            'copy_right' => $this->faker->sentence,
        ];
    }
}
