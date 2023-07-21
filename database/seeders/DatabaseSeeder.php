<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tạo một Category giả
        $category = Category::factory()->create();

        // Tạo một Product giả và gán nó với Category đã tạo
        $product = Product::factory()->create(['category_id' => $category->id]);
    }
}

// \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

         // Use the factory to seed Users and Profiles