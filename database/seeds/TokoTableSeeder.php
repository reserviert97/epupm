<?php

use Illuminate\Database\Seeder;

class TokoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toko')->insert([
            [
                'nama' => 'TTI Ujung',
                'alamat' => 'Negla',
            ],
            [
                'nama' => 'TTI Nur',
                'alamat' => 'Negla',
            ],
            [
                'nama' => 'TTI Rustiah',
                'alamat' => 'Mayag',
            ],
            [
                'nama' => 'TTI Karangjunti',
                'alamat' => 'Karangjunti',
            ],
            [
                'nama' => 'TTI Ciledug',
                'alamat' => 'Ciledug',
            ],
        ]);
    }
}
