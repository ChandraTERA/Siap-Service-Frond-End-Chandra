<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserM>
 */
class UserMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => fake()->name(),
            'id_customer' => generateIDCustomer(),
            'email' => fake()->unique()->safeEmail(),
            'tgl_lahir' => fake()->date(),
            'no_tlp' => '08123456786',
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'is_verified' => true,
            'otp_created_at' => now(),
            'password' => Hash::make('rahasia'),
        ];
    }
}
