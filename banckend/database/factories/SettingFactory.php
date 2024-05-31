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
            'logo_img' => '',
            'short_desc' => 'At vero eos et accusamus et iusto odio dign ducimus qui blanditiis praesentium volup deleniti atque corrupti quos dolores et molestias excepturi sint occaecati',
            'email' => 'chadnitalukder@gmail.com',
            'address' => 'Derai, Sylhet',
            'phone' => '01753507282',
            'facebook' => 'https://www.facebook.com/profile.php?id=100080683581830',
            'github' =>  'https://github.com/chadnitalukder2',
            'copy_right' => '© Chadni Talukder 2024',
        ];
    }
}
