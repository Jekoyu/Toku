<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of dummy products with fields matching the migration structure
        $products = [
            [
                'name' => 'Smartphone',
                'slug' => Str::slug('Smartphone'),
                'barcode' => '1234567890123',
                'description' => 'Latest 5G smartphone with high-end features',
                'price' => 799.99,
                'stock_quantity' => 50,
                'category_id' => 1 // Assuming this is the ID for a category
            ],
            [
                'name' => 'Jeans',
                'slug' => Str::slug('Jeans'),
                'barcode' => '9876543210987',
                'description' => 'Comfortable and stylish denim jeans',
                'price' => 49.99,
                'stock_quantity' => 200,
                'category_id' => 2 // Assuming this is the ID for a category
            ],
            [
                'name' => 'Office Chair',
                'slug' => Str::slug('Office Chair'),
                'barcode' => '1928374650123',
                'description' => 'Ergonomic chair for office use',
                'price' => 149.99,
                'stock_quantity' => 30,
                'category_id' => 4 // Assuming this is the ID for a category
            ],
            [
                'name' => 'Organic Apples',
                'slug' => Str::slug('Organic Apples'),
                'barcode' => '5647382910456',
                'description' => 'Fresh organic apples (per kg)',
                'price' => 2.99,
                'stock_quantity' => 100,
                'category_id' => 3 // Assuming this is the ID for a category
            ],
            [
                'name' => 'Notebook',
                'slug' => Str::slug('Notebook'),
                'barcode' => '1122334455667',
                'description' => 'Spiral notebook for students and professionals',
                'price' => 1.99,
                'stock_quantity' => 500,
                'category_id' => 5 // Assuming this is the ID for a category
            ]
        ];

        // Insert each product into the database
        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
