<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // laptop name
            'name' => $this->faker->unique()->word,
            // laptop slug
            'slug' => $this->faker->unique()->slug,
            // laptop category
            'category_id' => "1",
            // laptop description
            'description' => $this->faker->text,


        ];
    }
}
