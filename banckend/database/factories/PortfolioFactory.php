<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'title' => 'App Development',
            'service_id' => $this->faker->randomNumber(5, true),
            'short_title' => 'The best way to impress your web',
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://www.ikea.com/us/en/images/products/billy-bookcase-white__1051907_pe845796_s5.jpg?f=s',
        ];
    }
}
