<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TokoTableSeeder extends Seeder
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

        for ($i=0; $i < 5; $i++) { 
            $data[] = [
                'nama' => $faker->company,
                'alamat' => $faker->city,
            ];
        }
        DB::table('toko')->insert($data);
    }
}
