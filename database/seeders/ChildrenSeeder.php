<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('children')->insert([
            //Rumah Bersinar Orphanage
            [
                'orphanage_id' => 1,
                'photo' => 'tes1.jpg',
                'nama' => 'Abraham Karel Pulalo',
                'tempat_tgl_lahir' => 'Jayapura, 27 Maret 2006',
                'umur' => '18 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => 'SMA',
                'kelas' => '12'
                
                
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Yatinus Tabuni',
                'tempat_tgl_lahir' => 'Kerom, 30 Januari 2007',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMK',
                'kelas' => '12'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Alvaro Mokay',
                'tempat_tgl_lahir' => 'Jayapura, 15 Agustus 2006',
                'umur' => '18 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMK',
                'kelas' => '12'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Abraham Abris Felle',
                'tempat_tgl_lahir' => 'Jayapura, 12 Juli 2007',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMA',
                'kelas' => '10'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Aldo Melky Yoku',
                'tempat_tgl_lahir' => 'Jayapura, 25 November 2009',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMP',
                'kelas' => '9'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Rifaldo Salamuk',
                'tempat_tgl_lahir' => 'Sorong Selatan, 14 Juli 2005',
                'umur' => '19 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'Kuliah',
                'kelas' => '3'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Sefnat Flasi',
                'tempat_tgl_lahir' => 'Sorong Selatan, 13 September 2007',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMA',
                'kelas' => '10'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Samuel Krimadi',
                'tempat_tgl_lahir' => 'Sorong Selatan, 5 Desember 2006',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMK',
                'kelas' => '12'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Silas Sagisolo',
                'tempat_tgl_lahir' => 'Sorong Selatan, 12 November 2004',
                'umur' => '20 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMK',
                'kelas' => '11'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Yonadab Goo',
                'tempat_tgl_lahir' => 'Sorong Selatan, 12 Februari 2011',
                'umur' => '13 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMP',
                'kelas' => '7'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Yosafat Wenda',
                'tempat_tgl_lahir' => 'Kerom, 4 Oktober 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SMP',
                'kelas' => '7'
            ],
            [
                'orphanage_id' => 1,
                'photo' => '',
                'nama' => 'Fando Max Walha',
                'tempat_tgl_lahir' => 'Yahukimo, 18 September 2014',
                'umur' => '10 tahun',
                'jenis_kelamin' => '',
                'jenjang' => 'SD',
                'kelas' => '5'
            ],

            //Saluran Berkat Orphanage
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Adriel Joseph Giawa',
                'tempat_tgl_lahir' => '18 Juli 2015',
                'umur' => '9 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Andrian Vianus Halawa',
                'tempat_tgl_lahir' => '29 Oktober 2012',
                'umur' => '12 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Dini Bertania Waruwu',
                'tempat_tgl_lahir' => '1 November 2011',
                'umur' => '13 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Clara Sastriani Halawa',
                'tempat_tgl_lahir' => '13 Maret 2011',
                'umur' => '13 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Delfive Anugrah Waruwu',
                'tempat_tgl_lahir' => '8 Mei 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Insaf Kristiani Halawa',
                'tempat_tgl_lahir' => '3 Juli 2009',
                'umur' => '15 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Yasonna Hia',
                'tempat_tgl_lahir' => '15 Februari 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Febri Damai Fahuwusa Giawa',
                'tempat_tgl_lahir' => '23 Februari 2009',
                'umur' => '15 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Robertius Waruwu',
                'tempat_tgl_lahir' => '27 September 2007',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Nilarmawati Giawa',
                'tempat_tgl_lahir' => '31 Agustus 2008',
                'umur' => '16 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'William Felix',
                'tempat_tgl_lahir' => '4 Desember 2020',
                'umur' => '3 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 2,
                'photo' => '',
                'nama' => 'Aerylyn Felicia',
                'tempat_tgl_lahir' => '18 September 2024',
                'umur' => 'balita',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],

            //Tuhan Baik Orphanage
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Dietric Lumau',
                'tempat_tgl_lahir' => 'Tuabatu, 22 April 2011',
                'umur' => '13 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Verderica B. Maatama',
                'tempat_tgl_lahir' => 'Tuabatu, 12 April 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Ketril Pareda',
                'tempat_tgl_lahir' => 'Tuabatu, 5 November 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Jevon G. Balango',
                'tempat_tgl_lahir' => 'Tuabatu, 20 Agustus 2009',
                'umur' => '15 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Sardius Firli Maatama',
                'tempat_tgl_lahir' => 'Tuabatu, 3 Desember 2008',
                'umur' => '15 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Citra Lestari Tinenta',
                'tempat_tgl_lahir' => 'Tuabatu, 17 April 2008',
                'umur' => '16 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Aulia Dwy Maria Montoh',
                'tempat_tgl_lahir' => 'Girian, 16 Agustus 2008',
                'umur' => '16 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Suci Indah Mariana Lumau',
                'tempat_tgl_lahir' => 'Tuabatu, 16 Desember 2007',
                'umur' => '16 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Jovi Gilbert Lae',
                'tempat_tgl_lahir' => 'Tuabatu, 17 September 2007',
                'umur' => '17 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Alfrits Theophilus Lena',
                'tempat_tgl_lahir' => 'Tuabatu, 24 April 2006',
                'umur' => '18 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Avrillya Sophia Lena Sabono',
                'tempat_tgl_lahir' => 'Tuabatu, 24 April 2006',
                'umur' => '18 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Ercilia Richelle',
                'tempat_tgl_lahir' => 'Surabaya, 3 Januari 2022',
                'umur' => '2 tahun',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 3,
                'photo' => '',
                'nama' => 'Elizheva Razelle',
                'tempat_tgl_lahir' => 'Surabaya, 28 Oktober 2024',
                'umur' => 'balita',
                'jenis_kelamin' => '',
                'jenjang' => '',
                'kelas' => null
            ],

            //Saluran Kasih Orphanage
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Iran Natanail Halawa',
                'tempat_tgl_lahir' => 'Hilinamazihono, 14 Desember 2012',
                'umur' => '11 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Titus Arianto Daeli',
                'tempat_tgl_lahir' => 'Fulolosibohou, 10 Februari 2011',
                'umur' => '13 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Warisman Daeli',
                'tempat_tgl_lahir' => 'Fulolosibohou, 23 Oktober 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Wanodya Sari Daeli',
                'tempat_tgl_lahir' => 'Fulolosibohou, 29 Juli 2009',
                'umur' => '15 tahun',
                'jenis_kelamin' => 'Perempuan',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Argya Kristian Geovanni Halawa',
                'tempat_tgl_lahir' => 'Hilinamazihono, 22 Juni 2014',
                'umur' => '10 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Dismawati Waruwu',
                'tempat_tgl_lahir' => 'Lauso, 10 Maret 2013',
                'umur' => '11 tahun',
                'jenis_kelamin' => 'Perempuan',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Kusmah Neyger Waruwu',
                'tempat_tgl_lahir' => 'Lolombojoyo, 17 Maret 2008',
                'umur' => '16 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Kristoph Khamoto Daeli',
                'tempat_tgl_lahir' => 'Tiga Serangkai, 21 Desember 2010',
                'umur' => '13 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Valenciha Ancelina',
                'tempat_tgl_lahir' => 'Sidoharjo, 10 April 2010',
                'umur' => '14 tahun',
                'jenis_kelamin' => 'Perempuan',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Nandcyna Khennatra Aniceta',
                'tempat_tgl_lahir' => 'Sidoarjo, 30 Juni 2021',
                'umur' => '3 tahun',
                'jenis_kelamin' => 'Perempuan',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Samuel Grasio Putra Sumendhe',
                'tempat_tgl_lahir' => 'Jember, 15 Mei 2015',
                'umur' => '9 tahun',
                'jenis_kelamin' => 'Laki-laki',
                'jenjang' => '',
                'kelas' => null
            ],
            [
                'orphanage_id' => 4,
                'photo' => '',
                'nama' => 'Gresia Alfani Putri Sumendhe',
                'tempat_tgl_lahir' => 'Jember, 8 Februari 2009',
                'umur' => '15 tahun',
                'jenis_kelamin' => 'Perempuan',
                'jenjang' => '',
                'kelas' => null
            ]
            
        ]);

    }
}
