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
                'id_toko'   => rand(1,5),
                'volume'    => 2500,
                'harga'     => 8500,
                'total'     => 2500 * 8500,
            ],
            [
                'id_toko'   => rand(1,5),
                'volume'    => 3200,
                'harga'     => 8200,
                'total'     => 3200 * 8200,
            ],
            [
                'id_toko'   => rand(1,5),
                'volume'    => 2800,
                'harga'     => 8500,
                'total'     => 2800 * 8500,
            ],
            [
                'id_toko'   => rand(1,5),
                'volume'    => 1000,
                'harga'     => 8500,
                'total'     => 1000 * 8500,
            ],

        ]);
    }
}
