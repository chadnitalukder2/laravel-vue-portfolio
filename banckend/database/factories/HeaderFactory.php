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
            'short_title' => 'Professional Web and WordPress Plugin Developer',
            'title' => 'Welcome to Chadni Talukdar\'s Portfolio', 
            'short_desc' => 'Hello! I’m Chadni Talukdre, a passionate and experienced web developer specializing in creating dynamic websites and custom WordPress plugins. With a keen eye for detail and a commitment to delivering high-quality work, I help businesses establish their online presence and enhance their digital functionality.',
            'image' => 'https://bcciplayerimages.s3.ap-south-1.amazonaws.com/ipl/IPLHeadshot2023/2.png',
        ];
    }
}
