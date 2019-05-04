<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class PengirimanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $harga = [8000, 8200, 8500];
        $volume = [250, 300, 500, 750, 1000, 1500, 2000];
        $data = [];

        for ($i=0; $i < 10; $i++) { 
            $deal = $harga[rand(0,2)];
            $vol = $volume[rand(0,6)];
            $date = new Carbon($faker->dateTimeBetween('-1 month', '+1 month', 'Asia/Jakarta')->getTimestamp());
            
            $data[] = [
                'no_kirim' => $this->generateInv('KRM', (2000+$i), $date),
                'toko_id' => rand(1, 5),
                'volume' => $vol,
                'harga' => $deal,
                'total' => $deal*$vol,
                'created_at' => $date,
            ];
        }

        DB::table('pengiriman')->insert($data);
    }

    public function generateInv($kode, $nomor, $tanggal)
    {
        $bln = $tanggal->month < 10 ? '0' . $tanggal->month : $tanggal->month; 
        $key = $bln . $tanggal->year;
        $noInvoice = $kode.'-'.$key.'-'.$nomor;

        return $noInvoice;
    }
}
