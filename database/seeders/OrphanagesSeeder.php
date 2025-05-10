<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrphanagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orphanages')->insert([
            [
                'nama' => 'Rumah Bersinar Orphanage',
                'alamat' => 'Ruko Palacio B-22, Jl. Nginden Semolo 42, Surabaya City, East Java, Indonesia, 60118',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.475315773982!2d112.76617639999999!3d-7.3003732999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8d50eccd0b%3A0xb895b850d25593b3!2sPanti%20Asuhan%20Rumah%20Bersinar!5e0!3m2!1sid!2sid!4v1731577379249!5m2!1sid!2sid'
            ], 
            [
                'nama' => 'Saluran Berkat Orphanage',
                'alamat' => 'Jl. Nginden VI B/19. Surabaya City, East Java, Indonesia, 60118',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.451908639516!2d112.76605269999999!3d-7.3030181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb3d1fc0a01d%3A0x6fef7d9e362fb3cc!2sPanti%20Asuhan%20Saluran%20Berkat!5e0!3m2!1sid!2sid!4v1731577505756!5m2!1sid!2sid'
            ], 
            [
                'nama' => 'Tuhan Baik Orphanage',
                'alamat' => 'Ruko RMI L-6, Jl. Bratang Binangun. Surabaya City. East Java. Surabaya. 60284',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5109333353!2d112.76079620000002!3d-7.296347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb38237c133d%3A0x309d98f2186909aa!2sPanti%20Asuhan%20Tuhan%20Baik!5e0!3m2!1sid!2sid!4v1731577532353!5m2!1sid!2sid'
            ], 
            [
                'nama' => 'Saluran Kasih Orphanage',
                'alamat' => 'Perumahan Mutiara Citra Asri A-3, No: 7-8, Candi, Sidoarjo City, East Java, Indonesia. 61271',
                'google_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7258835856637!2d112.7062581!3d-7.495486499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1ce37600399%3A0x731165f56f568a47!2sPanti%20Asuhan%20Saluran%20Kasih!5e0!3m2!1sid!2sid!4v1731577565669!5m2!1sid!2sid'
            ]

        ]);
    }
}
