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
            'short_title' => 'I AM DEVELOPER',
            'title' => 'Creative Design and Web Solution Design', 
            'short_desc' => 'A passionate programmer , born and brought up in Bangladesh. I am a Full Stack Web Developer with React.js, Redux, Express.js, Node.js, mongodb, mysql, php, laravel as my tech stack.',
            'image' => 'https://static.vecteezy.com/system/resources/previews/020/389/525/original/hand-drawing-cartoon-girl-cute-girl-drawing-for-profile-picture-vector.jpg',
        ];
    }
}
