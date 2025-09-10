<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            ['name' => 'Black',      'hex_code' => '#000000'],
            ['name' => 'White',      'hex_code' => '#FFFFFF'],
            ['name' => 'Red',        'hex_code' => '#FF0000'],
            ['name' => 'Green',      'hex_code' => '#008000'],
            ['name' => 'Blue',       'hex_code' => '#0000FF'],
            ['name' => 'Yellow',     'hex_code' => '#FFFF00'],
            ['name' => 'Cyan',       'hex_code' => '#00FFFF'],
            ['name' => 'Magenta',    'hex_code' => '#FF00FF'],
            ['name' => 'Silver',     'hex_code' => '#C0C0C0'],
            ['name' => 'Gray',       'hex_code' => '#808080'],
            ['name' => 'Maroon',     'hex_code' => '#800000'],
            ['name' => 'Olive',      'hex_code' => '#808000'],
            ['name' => 'Purple',     'hex_code' => '#800080'],
            ['name' => 'Teal',       'hex_code' => '#008080'],
            ['name' => 'Navy',       'hex_code' => '#000080'],
        ];

        DB::table('product_colors')->insert($colors);
    }
}
