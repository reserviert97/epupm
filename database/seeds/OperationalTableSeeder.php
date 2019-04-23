<?php

use Illuminate\Database\Seeder;

class OperationalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Operational')->insert([
            [
                'item' => 'Pembelian Plastik',
                'harga' => 200,
                'volume' => 625,
                'total' => 625*200,
                'keterangan' => '',
                'created_at' => now()
            ],
            [
                'item' => 'Transport',
                'harga' => 155,
                'volume' => 1000,
                'total' => 1000*155,
                'keterangan' => '',
                'created_at' => now()
            ],
            [
                'item' => 'Giling',
                'harga' => 350,
                'volume' => 625,
                'total' => 625*350,
                'keterangan' => '',
                'created_at' => now()
            ],
            [
                'item' => 'Bongkar Muat',
                'harga' => 200,
                'volume' => 625,
                'total' => 200*625,
                'keterangan' => '',
                'created_at' => now()
            ],
        ]);
    }
}
