<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PembelianTableSeeder::class);
        Model::unguard();

        
        $this->call(PenjualTableSeeder::class);
        $this->call(TokoTableSeeder::class);
        $this->call(PembelianTableSeeder::class);
        $this->call(PengirimanTableSeeder::class);

        Model::reguard();
    }
}
