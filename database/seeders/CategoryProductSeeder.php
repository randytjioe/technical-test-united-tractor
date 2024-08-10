<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Furniture'],
            ['name' => 'Electronics'],
            ['name' => 'Books'],
            ['name' => 'Clothing'],
        ];

        foreach ($categories as $category) {
            CategoryProduct::create($category);
        }
    }
}
