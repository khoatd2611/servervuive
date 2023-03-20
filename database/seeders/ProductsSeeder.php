<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
            'amount_left' => 35,
            'price' => 21321,
            'title' => 'Aviator sunglasses',
            'description' => 'Aviator sunglasses are a type of eyewear that originated in the 1930s for pilots. They are characterized by their tear-drop shaped lenses and metal frames that wrap around the temples and often have a double bridge. The original aviator design was created to protect pilots\' eyes from the sun and wind while flying, and the style has since become a popular fashion accessory. Aviator sunglasses typically have large lenses that provide maximum coverage, reducing the amount of light that enters the eyes and reducing glare. The lenses are usually made of polycarbonate or polarized material and are available in various tints, including gray, brown, and green. Aviator sunglasses can be worn by both men and women, and the style is suitable for a wide range of outdoor activities, as well as casual and formal wear.',
            'img_url' => 'https://cdn.shopify.com/s/files/1/0246/3911/files/classic-collection-homepage_720x.jpg?v=1615330745'
        ]);
    }
}
