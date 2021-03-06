<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(AdsTableSeeder::class);
         $this->call(UkmTableSeeder::class);
         $this->call(GeneralTableSeeder::class);
         $this->call(RequestAdsTableSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(SubCategorySeeder::class);
    }
}
