<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBongkarMuat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bongkar_muat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_bm')->unique();
            $table->unsignedBigInteger('operasional_id');
            $table->bigInteger('harga');
            $table->bigInteger('volume');
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
        Schema::dropIfExists('bongkar_muat');
    }
}
