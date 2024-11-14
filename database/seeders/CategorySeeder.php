<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of dummy categories
        $categories = [
            ['category_name' => 'Electronics', 'description' => 'Electronic devices and gadgets'],
            ['category_name' => 'Clothing', 'description' => 'Apparel and accessories'],
            ['category_name' => 'Groceries', 'description' => 'Daily grocery items'],
            ['category_name' => 'Furniture', 'description' => 'Home and office furniture'],
            ['category_name' => 'Books', 'description' => 'Books and stationary items']
        ];

        // Insert each category into the database
        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
