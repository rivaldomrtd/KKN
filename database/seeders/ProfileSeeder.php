<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('misis')->insert([
            'Image' => '20211219021353.png',
            'text' => 'Karangpilang adalah sebuah kecamatan di Kota Surabaya, Provinsi Jawa Timur, Indonesia. Terdiri dari 4 Kelurahan (Kedurus, Kebraon, Warugunung, Karangpilang)',
            'visi' => 'GOTONG ROYONG MENUJU KOTA DUNIA YANG MAJU, HUMANIS DAN BERKELANJUTAN',
            'misi' => 'MEMBANGUN SUMBER DAYA MANUSIA (SDM) UNGGUL, SEHAT JASMANI DAN ROHANI, PRODUKTIF SERTA BERKARAKTER MELALUI PENINGKATAN AKSES DAN KUALITAS PELAYANAN KESEHATAN, PENDIDIKAN DAN KEBUTUHAN DASAR LAINNYA'
        ]);
    }
}
