<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::create([
            'asset_id' => 1,
            'category_name' => 'Snack',
            'category_slug' => 'snack'
        ]);

        Category::create([
            'asset_id' => 2,
            'category_name' => 'Snack',
            'category_slug' => 'snack'
        ]);

        Category::create([
            'asset_id' => 3,
            'category_name' => 'Drink',
            'category_slug' => 'drink'
        ]);

        Category::create([
            'asset_id' => 4,
            'category_name' => 'Drink',
            'category_slug' => 'drink'
        ]);
    }
}
