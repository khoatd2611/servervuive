<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins_users')->insert([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'owner',
            'email' => 'khoa@khoa.com',
        ]);
    }
}
