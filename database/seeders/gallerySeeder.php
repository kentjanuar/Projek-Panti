<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gallerySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gallery')->insert([
            [
                'src' => 'IMG_20230708_112202.jpg',
                'title' => 'title 1'
            ],
            [
                'src' => 'facebook_1689377866995_7085764345052355543.jpg',
                'title' => 'title 2'
            ],
            [
                'src' => 'foto-anak-anak-1.jpg',
                'title' => 'title 3'
            ],
            [
                'src' => 'Foto-dari-Andri-Wisnu-Jayakusuma.jpg',
                'title' => 'title 4'
            ],
            [
                'src' => 'IMG_20230416_145508-1-2048x1152.jpg',
                'title' => 'title 5'
            ],
            [
                'src' => 'IMG_20230714_235257.jpg',
                'title' => 'title 6'
            ],
            [
                'src' => 'IMG-20220713-WA0008.jpg',
                'title' => 'title 7'
            ],
            [
                'src' => 'IMG-20220718-WA0003-1.jpg',
                'title' => 'title 8'
            ],
            [
                'src' => 'IMG-20230204-WA0037.jpg',
                'title' => 'title 9'
            ],
            [
                'src' => 'IMG-20230331-WA0019.jpg',
                'title' => 'title 10'
            ],
            [
                'src' => 'IMG-20230407-WA0025-1.jpg',
                'title' => 'title 11'
            ],
            [
                'src' => 'IMG-20230414-WA0065.jpg',
                'title' => 'title 12'
            ],
            [
                'src' => 'IMG-20230528-WA0023-1.jpg',
                'title' => 'title 13'
            ],
            [
                'src' => 'IMG-20230608-WA0033-1.jpg',
                'title' => 'title 14'
            ],
            [
                'src' => 'IMG-20230621-WA0031.jpg',
                'title' => 'title 15'
            ],
            [
                'src' => 'IMG-20230706-WA0047.jpg',
                'title' => 'title 16'
            ],
            [
                'src' => 'IMG-20230713-WA0054-1.jpg',
                'title' => 'title 17'
            ]
            ]);
    }
}
