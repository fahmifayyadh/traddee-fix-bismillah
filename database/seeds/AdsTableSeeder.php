<?php

use Illuminate\Database\Seeder;
use App\Ads;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i< 10 ; $i ++){
            if ($i<3){
                 $ctgr = 1;
            }elseif ($i<6){
                $ctgr = 2;
            }elseif ($i<8){
                $ctgr =3;
            }else{
                $ctgr =4;
            }

            Ads::create([
                'category' => $ctgr
            ]);

        }
    }
}
