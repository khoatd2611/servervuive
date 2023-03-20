<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'birthday' => '2018-12-12',
            'gender' => 'male',
            'phone_number' => '0123466789',
            'admin' => true,
            'address' => '',
        ]);

        DB::table('products')->insert([
            'amount_left' => 36,
            'price' => 10000,
            'title' => 'The incredible glasses',
            'description' => 'Sunglasses are a type of eyewear designed to protect the eyes from the harmful effects of the sun\'s ultraviolet (UV) rays and glare. They typically have tinted lenses that reduce the amount of light that enters the eyes, making them ideal for outdoor activities and bright light conditions. Sunglasses can also come in a variety of styles, such as aviator, wayfarer, sport, and fashion, and can be made of different materials, including plastic, metal, and glass. Some sunglasses also have polarized lenses that help eliminate glare, making them suitable for water and snow sports. In addition to providing visual comfort and protection, sunglasses can also be a fashion accessory, adding to one\'s personal style.',
            'img_url' => 'https://cdn.shopify.com/s/files/1/0246/3911/files/classic-collection-homepage_720x.jpg?v=1615330745'
        ]);

        DB::table('products')->insert([
            'amount_left' => 47,
            'price' => 13400,
            'title' => 'The incredible glasses 2',
            'description' => 'Sunglasses are a type of eyewear designed to protect the eyes from the harmful effects of the sun\'s ultraviolet (UV) rays and glare. They typically have tinted lenses that reduce the amount of light that enters the eyes, making them ideal for outdoor activities and bright light conditions. Sunglasses can also come in a variety of styles, such as aviator, wayfarer, sport, and fashion, and can be made of different materials, including plastic, metal, and glass. Some sunglasses also have polarized lenses that help eliminate glare, making them suitable for water and snow sports. In addition to providing visual comfort and protection, sunglasses can also be a fashion accessory, adding to one\'s personal style.',
            'img_url' => 'https://cdn.shopify.com/s/files/1/0246/3911/files/classic-collection-homepage_720x.jpg?v=1615330745'
        ]);

        DB::table('products')->insert([
            'amount_left' => 47,
            'price' => 13400,
            'title' => 'The incredible glasses 3',
            'description' => 'Sunglasses are a type of eyewear designed to protect the eyes from the harmful effects of the sun\'s ultraviolet (UV) rays and glare. They typically have tinted lenses that reduce the amount of light that enters the eyes, making them ideal for outdoor activities and bright light conditions. Sunglasses can also come in a variety of styles, such as aviator, wayfarer, sport, and fashion, and can be made of different materials, including plastic, metal, and glass. Some sunglasses also have polarized lenses that help eliminate glare, making them suitable for water and snow sports. In addition to providing visual comfort and protection, sunglasses can also be a fashion accessory, adding to one\'s personal style.',
            'img_url' => 'https://cdn.shopify.com/s/files/1/0246/3911/files/classic-collection-homepage_720x.jpg?v=1615330745'
        ]);
    }
}
