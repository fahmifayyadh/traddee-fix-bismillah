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

        for ($i=0; $i<8; $i++){
            foreach ($category as $ctgr){
                SubCategory::create([
                    'category_id' => $i+1,
                    'name' => $ctgr
                ]);
            }
        }
    }
}
