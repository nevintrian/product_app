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
        Product::create([
            'product_name' => 'Oreo',
            'product_slug' => 'oreo',
            'price' => 10000,
            'description' => 'this is oreo'
        ]);

        Product::create([
            'product_name' => 'Milkuat',
            'product_slug' => 'milkuat',
            'price' => 5000,
            'description' => 'this is milkuat'
        ]);
    }
}
