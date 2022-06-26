<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'title' => 'KARANGPILANG',
            'text' => 'Adalah sebuah kecamatan di Kota Surabaya, Provinsi Jawa Timur, Indonesia.',
            'image' => '20211219021012.png',
        ]);
    }
}
