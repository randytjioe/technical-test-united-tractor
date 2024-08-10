<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                'product_category_id' => 1, 
                'name' => 'Chair',
                'price' => 50000,
                'image' => 'chair.jpg',
            ],
            [
                'product_category_id' => 1, 
                'name' => 'Table',
                'price' => 150000,
                'image' => 'table.jpg',
            ],
            [
                'product_category_id' => 1, 
                'name' => 'Laptop',
                'price' => 5000000,
                'image' => 'laptop.jpg',
            ],
            [
                'product_category_id' => 1,
                'name' => 'Laravel for Beginners',
                'price' => 100000,
                'image' => 'laravel_book.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
