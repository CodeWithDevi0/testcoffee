<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'product_name' => 'Espresso',
                'description' => 'A strong and rich coffee made with finely-ground coffee beans.',
                'price' => 3.50,
                'product_image' => 'espresso.jpg',
                'category_id' => 1,
            ],
            [
                'product_name' => 'Latte',
                'description' => 'A creamy coffee drink made with steamed milk and espresso.',
                'price' => 4.00,
                'product_image' => 'latte.jpg',
                'category_id' => 1,
            ],
            [
                'product_name' => 'Cappuccino',
                'description' => 'An Italian coffee drink made with equal parts espresso, steamed milk, and foam.',
                'price' => 4.50,
                'product_image' => 'cappuccino.jpg',
                'category_id' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
