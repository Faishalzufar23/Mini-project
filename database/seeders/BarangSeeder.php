<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'AC',
                'nama_barang' => 'Sharp',
                'harga_barang' => 20,
                'deskripsi_barang' => 'lorem',
                'satuan_id' => 1
            ],
        ]);
    }
}
