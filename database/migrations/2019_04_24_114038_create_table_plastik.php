<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlastik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plastik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_plastik')->unique();
            $table->unsignedBigInteger('operasional_id');
            $table->bigInteger('harga');
            $table->bigInteger('volume');
            $table->bigInteger('total');
            $table->string('jenis');
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
        Schema::dropIfExists('plastik');
    }
}
