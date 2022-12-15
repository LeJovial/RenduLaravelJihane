<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vignette>
 */
class VignetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'legende' => fake()->text(70),
            'description' => fake()->text(),
            'url' => 'https://cataas.com/cat',
            'statut' => fake()->boolean(),
        ];
    }
}
