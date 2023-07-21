<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Category::class;
    public function definition(): array
    {
        return [ 
            'name' => $this->faker->title,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'parent_id' => $this->faker->numberBetween($min = 0, $max = 1),
            'price' => $this->faker->numberBetween($min = 0, $max = 1),

            'is_active' => $this->faker->boolean(80), // Sử dụng faker để tạo giá trị true/false với tỷ lệ 80% true
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
