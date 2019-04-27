<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGiling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('operasional_id');
            $table->bigInteger('total');
            $table->bigInteger('volume_gkg');
            $table->bigInteger('volume_beras');
            $table->integer('rendemen');
            $table->unsignedBigInteger('penjual');
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
        Schema::dropIfExists('giling');
    }
}
