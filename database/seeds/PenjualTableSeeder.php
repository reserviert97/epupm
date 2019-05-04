<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PenjualTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        $data = [];
        for ($i=0; $i < 10; $i++) { 
            $data[] = [
                'nama' => $faker->firstName,
                'alamat' => $faker->city,
            ];
        }
        DB::table('penjual')->insert($data);
    }
}
