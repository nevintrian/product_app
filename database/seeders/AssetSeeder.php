<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asset::create([
            'name' => 'oreo1.jpg',
            'path' => 'assets/image/',
            'size' => '128'
        ]);

        Asset::create([
            'name' => 'oreo2.jpg',
            'path' => 'assets/image/',
            'size' => '1024'
        ]);

        Asset::create([
            'name' => 'milkuat1.jpg',
            'path' => 'assets/image/',
            'size' => '128'
        ]);

        Asset::create([
            'name' => 'milkuat2.jpg',
            'path' => 'assets/image/',
            'size' => '1024'
        ]);
    }
}
