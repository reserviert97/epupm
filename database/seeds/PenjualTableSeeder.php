<?php

use Illuminate\Database\Seeder;

class PenjualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penjual')->insert([
            [
                'nama' => 'Abdul Syukur',
                'alamat' => 'Negla',
            ],
            [
                'nama' => 'Burhanudin',
                'alamat' => 'Negla',
            ],
            [
                'nama' => 'Badrun',
                'alamat' => 'Karangjunti',
            ],

        ]);
    }
}
