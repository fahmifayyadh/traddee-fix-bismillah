<?php

use Illuminate\Database\Seeder;
use App\Ukm;

class UkmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ukm::create([
            'user_id' => 3,
            'merchant_name' => 'Bismillah sukses',
            'slug' => 'bismillah-sukses',
            'address' => 'jl mana ya saya lupa',
            'province' => 'jawa timur',
            'city' => 'jember',
            'district' => 'sumbersari - sumbersari',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.3854409510313!2d113.68675731476868!3d-8.163865684062344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwMDknNDkuOSJTIDExM8KwNDEnMjAuMiJF!5e0!3m2!1sid!2sid!4v1608138050219!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            'description' => 'qwertyuiop ertyuiop qwertyuio',
            'active' => 1
        ]);
    }
}
