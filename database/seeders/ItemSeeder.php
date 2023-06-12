<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplies')->insert([
            'tanggal' => '12/06/2023',
            'kode barang' => '',
            'gambar barang' => 'tes',
            'nama barang' => 'hengpong',
            'stok awal' => '2',
            'harga' => 'Rp. 3.000.000',
            'barang masuk' => '1',
            'barang keluar' => '1',
            'stok akhir' => '1',
        ]);
    }
}
