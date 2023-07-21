<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        $category = Category::factory()->create();
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->randomDigitNotNull,
            'price' => $this->faker->randomFloat(2, 10, 1000), // Random price between 10 and 1000 with 2 decimal places
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // Generate a random product image URL
            'is_active' => $this->faker->boolean(80), // 80% chance of true, 20% chance of false
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
