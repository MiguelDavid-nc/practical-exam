<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'transaction_title' => fake()->sentence(3),
        'description' => fake()->text(100),
        'status' => fake()->randomElement(['successful', 'declined']), 
        'total_amount' => fake()->randomFloat(2, 10, 100),
        'transaction_number' => fake()->unique()->numerify('TRX####'),

        ];
    }
}