<?php

namespace Database\Factories;

use App\Models\ych;
use Illuminate\Support\Str;
use illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ychFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'vozrast'=>mt_rand(16,50),
            'data'=>fake()->unique()->dateTimeBetween($startDate='1990-01-01',$endDate='2000-01-01')->format('Y-m-d'),
        ];

            
        
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            //'email_verified_at' => null,
        ]);
    }
}
