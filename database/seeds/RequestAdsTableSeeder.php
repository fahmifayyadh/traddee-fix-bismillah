<?php

use Illuminate\Database\Seeder;
use App\RequestAds;

class RequestAdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestAds::create([
            'ukm_id' => 1,
            'image' =>'a',
        ]);
    }
}
