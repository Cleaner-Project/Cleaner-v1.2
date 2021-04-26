<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
//          Admin
          [
              'full_name'=>'Sorya Admin',
              'username'=>'Admin',
              'email'=>'admin@gmail.com',
              'password'=>Hash::make('11111111'),
              'role'=>'admin',
              'status'=>'active'
          ],
          [
            'full_name'=>'Sorya2 Admin',
            'username'=>'Admin',
            'email'=>'admin2@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'admin',
            'status'=>'active'
        ],
//          Customer
          [
            'full_name'=>'Sorya Customer',
            'username'=>'Customer',
            'email'=>'Customer@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'customer',
            'status'=>'active'
        ],
//          Cleaner
        [
            'full_name'=>'Sorya Cleaner',
            'username'=>'Cleaner',
            'email'=>'Cleaner@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'cleaner',
            'status'=>'active'

        ],

      ]);
    }
}
