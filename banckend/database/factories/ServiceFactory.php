<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Bakend',
            'short_desc' => 'Hen our power of choice is untrammelled and when nothing prevents our being able',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwmJnGli9p7LD5AS8Ksuk66oK1jNUoE30mWA&s',
        ];
    }
}
