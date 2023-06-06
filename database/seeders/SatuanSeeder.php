<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'Pns',
                'nama_satuan' => 'Panasonic',

            ],
            [
                'kode_satuan' => 'Sms',
                'nama_satuan' => 'Samsung',

            ],
            [
                'kode_satuan' => 'Daik',
                'nama_satuan' => 'Daikin',

            ]
        ]);
    }
}
