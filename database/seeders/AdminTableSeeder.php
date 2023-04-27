<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       $admin = [
        'name'=>'robbin Dhilip',
       'email'=>'robbindhilip@110',
       'phone_number'=>987654,
       'password'=>Hash::make('123456'),
       'original_password'=>'123456'
        ];

        \DB::table('admin')->insert($admin);
    }
}
