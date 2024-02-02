<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //WOMENS
        for ($i = 0; $i < 12; $i++) {
            Product::create([
                'name' => 'Womens ' . $i,
                'slug' => 'women-' . $i,
                'details' => 'This is a product details for ' . $i,
                'sku' => 'SK078945C',
                'description' => 'This is a product description for ' .$i . 'loren imputmsmio midoadsi miomdioa',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
        //MENS
        for ($i = 0; $i < 12; $i++) {
            Product::create([
                'name' => 'Mens ' . $i,
                'slug' => 'men-' . $i,
                'details' => 'This is a product details for ' . $i,
                'sku' => 'SK078945C',
                'description' => 'This is a product description for ' .$i . 'loren imputmsmio midoadsi miomdioa',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
        //KIDS
        for ($i = 0; $i < 12; $i++) {
            Product::create([
                'name' => 'Kids ' . $i,
                'slug' => 'kid-' . $i,
                'details' => 'This is a product details for ' . $i,
                'sku' => 'SK078945C',
                'description' => 'This is a product description for ' .$i . 'loren imputmsmio midoadsi miomdioa',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
        //HOME GOODS
        for ($i = 0; $i < 12; $i++) {
            Product::create([
                'name' => 'Home Goods ' . $i,
                'slug' => 'homegoods-' . $i,
                'details' => 'This is a product details for ' . $i,
                'sku' => 'SK078945C',
                'description' => 'This is a product description for ' .$i . 'loren imputmsmio midoadsi miomdioa',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
    }
}
