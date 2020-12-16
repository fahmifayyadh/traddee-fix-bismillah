<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'super admin',
            'email' => 'suadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'role' => 1,
            'status' => 1
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('adminadmin'),
            'role' => 2,
            'status' => 1
        ]);

        User::create([
            'name' => 'merchant',
            'email' => 'merchant@gmail.com',
            'password' => bcrypt('merchant'),
            'role' => 3,
            'status' => 1
        ]);
    }
}
