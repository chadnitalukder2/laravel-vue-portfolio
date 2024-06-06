<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Web Design',
            'short_desc' => 'Creating visually appealing designs that reflect your brand identity. I focus on usability and aesthetics to deliver a seamless user experience.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg',
        ]);
        Service::create([
            'title' => 'WordPress Plugin Development',
            'short_desc' => 'Custom plugin development to extend the functionality of your WordPress site. Whether you need a simple tool or a complex system, I’ve got you covered.',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/WordPress_blue_logo.svg',
        ]);
        Service::create([
            'title' => 'Web Development',
            'short_desc' => 'Building modern, responsive websites tailored to your business needs. From design to deployment, I ensure your site is user-friendly and performs excellently across all devices.',
            'image' => 'https://img.freepik.com/free-vector/gradient-code-logo-with-tagline_23-2148811020.jpg?size=338&ext=jpg&ga=GA1.1.672697106.1717632000&semt=ais_user',
        ]);
    }
}
