<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nisn' => intval(sprintf("%010d", mt_rand(0, 999999999))),
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ];
    }

    // public function role () {

    // }

    public function configure()
    {
        return $this->afterMaking(function (User $user) {
        })->afterCreating(function (User $user) {
            $user->assignRole('user');
        });
    }
}
