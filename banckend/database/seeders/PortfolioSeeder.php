<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'title' => 'Ecommerce Website',
            'short_title' => 'Ecommerce Website with Laravel, Vue and Payment Gateway',
            'service_id' => 1,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

        Portfolio::create([
            'title' => 'Social Media App',
            'short_title' => 'Social Media App with Laravel, Vue and Tailwind CSS',
            'service_id' => 2,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/WordPress_blue_logo.svg',
        ]);

        Portfolio::create([
            'title' => 'Realtime Chat App',
            'short_title' => 'Realtime Chat App with Laravel, Vue and Pusher',
            'service_id' => 3,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://images.unsplash.com/photo-1601034913836-a1f43e143611?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

        Portfolio::create([
            'title' => 'Wordpress Plugin',
            'short_title' => 'Ecommerce Website with Laravel, Vue and Payment Gateway',
            'service_id' => 1,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://plus.unsplash.com/premium_photo-1683731896418-493316129f0e?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

        Portfolio::create([
            'title' => 'Laravel Package',
            'short_title' => 'Ecommerce Website with Laravel, Vue and Payment Gateway',
            'service_id' => 1,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

        Portfolio::create([
            'title' => 'React Native App',
            'short_title' => 'Ecommerce Website with Laravel, Vue and Payment Gateway',
            'service_id' => 1,
            'github_url' => 'git',
            'live_url' => 'live',
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ]);

    }
}
