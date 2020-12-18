<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = ['$makanan', '$produsen', '$store', '$inap', '$barang', '$jasa', '$properti', '$bumi'];
        $makanan = ['Rumah makan', 'resto', 'warteg', 'jajan keliling', 'oleh2', 'jajanan pasar', 'angkringan'];
        $produsen =['handycraft', 'UMKM', 'lainnya'];
        $store= ['Toko', 'warung', 'toserba', 'dongdangan', 'kaki5', 'online'];
        $inap = ['Destinasi wisata', 'Hotel', 'penginapan', 'homestay', 'kontrakan', 'kost2an'];
        $barang =['alat olahraga', 'pakaian', 'elektronik', 'peralatan rumah tangga', 'dekorasi', 'hobi dan mainan'];
        $jasa = ['tukang bangunan', 'ahli', 'service elektronik', 'jasa pangilan', 'bengkel motor', 'bengkel mobil', 'tambal ban', 'jahit', 'jasa transportasi(jatrans)', 'jasa ojek (jajek)', 'rental'];
        $properti = ['Perumahan', 'kavling tanah', 'jual tanah', 'jual kebun'];
        $bumi = ['Pertanian', 'perkebunan', 'perikanan'];

        foreach ($makanan as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 1,
                'name' => $makanan[$index]
            ]);
        }
        foreach ($produsen as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 2,
                'name' => $produsen[$index]
            ]);
        }
        foreach ($store as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 3,
                'name' => $store[$index]
            ]);
        }
        foreach ($inap as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 4,
                'name' => $inap[$index]
            ]);
        }
        foreach ($barang as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 5,
                'name' => $barang[$index]
            ]);
        }
        foreach ($jasa as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 6,
                'name' => $jasa[$index]
            ]);
        }
        foreach ($properti as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 7,
                'name' => $properti[$index]
            ]);
        }
        foreach ($bumi as $index=>$ctgr){
            SubCategory::create([
                'category_id' => 8,
                'name' => $bumi[$index]
            ]);
        }
    }
}
