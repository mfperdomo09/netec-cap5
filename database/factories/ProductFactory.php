<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        $categories = Category::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->name(),
            'category_id' => $this->faker->randomElement($categories),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'status' => true
        ];
    }
}
