<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'experience' => 'HTML',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg',
        ]);
        Experience::create([
            'experience' => 'CSS',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg',
        ]);

        Experience::create([
            'experience' => 'SASS',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/96/Sass_Logo_Color.svg',
        ]);

        Experience::create([
            'experience' => 'Git',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e0/Git-logo.svg',
        ]);
        Experience::create([
            'experience' => 'GitHub',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg',
        ]);


        Experience::create([
            'experience' => 'JavaScript',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png',
        ]);

        Experience::create([
            'experience' => 'JQuery',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmLME0hpAJOqBGhaVjcgkk8hIKS3S4GAqrLg&s',
        ]);

        Experience::create([
            'experience' => 'Vue',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/f1/Vue.png',
        ]);

        Experience::create([
            'experience' => 'MySQL',
            'image' => 'https://www.svgrepo.com/show/303251/mysql-logo.svg',
        ]);

        Experience::create([
            'experience' => 'PHP',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg',
        ]);

        Experience::create([
            'experience' => 'WordPress Plugin Development',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/WordPress_blue_logo.svg',
        ]);

        Experience::create([
            'experience' => 'Laravel',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png',
        ]);
    }
}
