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
            [
                'keterangan' => 'Pembelian Gabah',
                'penjual_id' => rand(16,20),
                'volume' => 2000,
                'satuan' => 'GKG',
                'harga' => 5100,
                'total' => 2000*5100,
            ],
            [
                'keterangan' => 'Pembelian Gabah',
                'penjual_id' => rand(16,20),
                'volume' => 1000,
                'satuan' => 'GKG',
                'harga' => 5000,
                'total' => 2000*5000,
            ],
            [
                'keterangan' => 'Pembelian Gabah',
                'penjual_id' => rand(16,20),
                'volume' => 1500,
                'satuan' => 'GKG',
                'harga' => 5200,
                'total' => 1500*5200,
            ],
        ]);

    }
}
