<?php

use Illuminate\Database\Seeder;

class PengirimanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengiriman')->insert([
            [
                'toko' => 'TTI Nur',
                'volume' => 2500,
                'harga' => 8500,
                'total' => 2500 * 8500,
            ],
            [
                'toko' => 'TTI Ujung',
                'volume' => 3200,
                'harga' => 8200,
                'total' => 3200 * 8200,
            ],
            [
                'toko' => 'TTI Karangjunti',
                'volume' => 2800,
                'harga' => 8500,
                'total' => 2800 * 8500,
            ],

        ]);
    }
}
