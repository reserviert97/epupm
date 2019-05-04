<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $harga = [4900, 5000, 5100, 5200, 5300, 5400, 5500];
        $volume = [250, 300, 500, 750, 1000, 1500, 2000, 2500, 3000];
        $data = [];

        for ($i=0; $i < 10; $i++) { 
            $deal = $harga[rand(0,6)];
            $vol = $volume[rand(0,8)];
            $date = new Carbon($faker->dateTimeBetween('-1 month', '+1 month', 'Asia/Jakarta')->getTimestamp());
            
            $data[] = [
                'no' => $this->generateInv('PMB', (1000+$i), $date),
                'penjual_id' => rand(1, 10),
                'volume' => $vol,
                'satuan' => 'GKG',
                'harga' => $deal,
                'total' => $deal*$vol,
                'created_at' => $date,
            ];
        }

        DB::table('pembelian')->insert($data);

    }

    public function generateInv($kode, $nomor, $tanggal)
    {
        $bln = $tanggal->month < 10 ? '0' . $tanggal->month : $tanggal->month; 
        $key = $bln . $tanggal->year;
        $noInvoice = $kode.'-'.$key.'-'.$nomor;

        return $noInvoice;
    }
}
