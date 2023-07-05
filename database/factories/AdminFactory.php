<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Tupange Admin',
            'email' => 'tupange@admin.com',
            'password' => Hash::make('password'),
            'phone_number' => '0707545432',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
