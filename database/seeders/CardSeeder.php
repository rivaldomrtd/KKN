<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
            [
                'header' => '1',
                'image' => '20211222162149.svg',
                'text' => 'Industrial',
                'title' => 'Karangpilang memiliki banyak perusahaan, dominasi utama di perusahan manufaktur.
',
            ],
            [
                'header' => '2',
                'image' => '20220103082526.svg',
                'text' => 'UMKM',
                'title' => 'Pelaku usaha mikro di daerah Karangpilang cukup banyak. Dominasi utama yakni UMKM yang bergelut di bidang F&B.
',
            ],
            [
                'header' => '3',
                'image' => '20220103082637.svg',
                'text' => 'Wisata',
                'title' => 'Dengan letaknya yang bersebelahan langsung dengan aliran sungai, Karangpilang berpotensi menjadi daerah wisata.
',
            ],
        ];

        DB::table('cards')->insert($cards);
    }
}
