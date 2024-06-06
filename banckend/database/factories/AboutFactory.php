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
            'description' => 'Hello! I’m Chadni Talukdar, an enthusiastic and dedicated web and WordPress plugin developer. My journey into the world of web development began with a deep fascination for technology and a desire to create impactful digital experiences.
            My passion for web development drives me to stay updated with the latest industry trends and technologies. I am committed to delivering high-quality work and am always eager to take on new challenges. Whether it’s developing a software, I approach each project with creativity and meticulous attention to detail.
                ',
            'image' => 'https://static.vecteezy.com/system/resources/previews/020/389/525/original/hand-drawing-cartoon-girl-cute-girl-drawing-for-profile-picture-vector.jpg',
            'complete_project' => 10,
            'year_experience' => 1,
            'cv' => 'https://drive.google.com/file/d/1E7gCW4BLV8YvrfRjS0fyPX3gBVg9gT6R/view',
        ];
    }
}
