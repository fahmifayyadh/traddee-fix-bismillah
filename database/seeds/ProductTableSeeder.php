<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'ukm_id' => 1,
            'name' => 'Pijet berkualitas',
            'slug' => 'pijat-berkualitas',
            'description' => 'enak gan, yuk pijet',
            'category_id' =>1,
            'sub_category_id' => 1,
            'variant' => 'pijat express',
            'price' => 20000,
            'available' => 1
        ]);

        Product::create([
            'ukm_id' => 1,
            'name' => 'Pijet super',
            'slug' => 'pijat-super',
            'description' => 'enak gan, yuk pijet',
            'category_id' =>1,
            'sub_category_id' => 1,
            'variant' => 'pijat super enak',
            'price' => 40000,
            'available' => 1
        ]);
    }
}
