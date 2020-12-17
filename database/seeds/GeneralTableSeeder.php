<?php

use Illuminate\Database\Seeder;
use App\General;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        General::create([
            'name' => 'Traddee.com',
            'description' => 'Pasar Online milenial'
        ]);
    }
}
