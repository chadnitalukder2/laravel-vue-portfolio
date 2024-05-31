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
            'short_title' => 'ABOUT ME',
            'title' => 'Hi there! I am Chadni Talukder',
            'description' => 'A passionate programmer , born and brought up in Bangladesh. I am a Full Stack Web Developer with React.js, Redux, Express.js, Node.js, mongodb, mysql, php, laravel as my tech stack.
                In 2017, I started my Engineering with specialization in computer science and Engineering.
                Working with the clients, my goal is always driven towards providing amazing experience with the best level of quality and service to them.
                Along with that. I love learning about new technologies.
                ',
            'image' => 'https://static.vecteezy.com/system/resources/previews/020/389/525/original/hand-drawing-cartoon-girl-cute-girl-drawing-for-profile-picture-vector.jpg',
            'complete_project' => 57,
            'year_experience' => 1,
            'cv' => '',
        ];
    }
}
