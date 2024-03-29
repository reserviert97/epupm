<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToPembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembelian', function (Blueprint $table) {
            $table->foreign('penjual_id')
                  ->references('id')->on('penjual')->onDelete('cascade');
        });
        
        Schema::table('pengiriman', function (Blueprint $table) {
            $table->foreign('toko_id')
                  ->references('id')->on('toko')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembelian', function (Blueprint $table) {
            //
        });

        Schema::table('pengiriman', function (Blueprint $table) {
            //
        });
    }
}
