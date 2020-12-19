<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['makanan', 'produsen', 'store', 'wisata dan inap', 'barang', 'jasa', 'properti', 'hasil bumi'];
        foreach ($category as $ctgr){
            Category::create([
                'name' => $ctgr,
                'slug' => \Illuminate\Support\Str::slug($ctgr)
            ]);
        }
    }
}
