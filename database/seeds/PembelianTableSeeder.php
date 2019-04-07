<?php

use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembelian')->insert([
            'keterangan' => 'Pembelian Gabah',
            'penjual' => 'Abdul Syukur',
            'volume' => 5000,
            'satuan' => 'GKG',
            'harga' => 5100,
            'total' => 25250000,
        ]);

    }
}
