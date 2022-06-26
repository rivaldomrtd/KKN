<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama_perusahaan' => 'VALD00S',
            'emails' => 'comsystemprogram@gmail.com',
            'locations' => 'Karangpilang Barat no.175',
            'phone' => '0895605882133',
            'image' => '20211222161322.svg',
            'text' => 'Sejarah ',
            'title' => 'Pada zaman dahulu mulanya Karang pilang bernama Karang pong, tidak ada
            yang mengetahui tentang sejarah cikal bakal terjadinya Desa Karangpilang. Namun,
            yang di ingat masyarakat ketika membicarakan Karangpilang adalah Markas Besar
            Marinir dan Gunung Bajulnya. ',
        ]);
    }
}
