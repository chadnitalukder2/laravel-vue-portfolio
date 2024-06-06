<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'phone' => '01755536322',
            'subject' => 'hello',
            'message' => 'Pomnis voluptas assumenda est, omnis dolor repellendus.',
        ];
    }
}
