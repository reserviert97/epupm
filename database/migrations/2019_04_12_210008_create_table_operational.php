<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOperational extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Operational', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item');
            $table->bigInteger('harga');
            $table->bigInteger('volume');
            $table->bigInteger('total');
            $table->string('Keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Operational');
    }
}
