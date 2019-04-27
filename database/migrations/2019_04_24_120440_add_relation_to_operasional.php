<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToOperasional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giling', function (Blueprint $table) {
            $table->foreign('operasional_id')
                  ->references('id')->on('operasional')->onDelete('cascade');
        });

        Schema::table('transport', function (Blueprint $table) {
            $table->foreign('operasional_id')
                  ->references('id')->on('operasional')->onDelete('cascade');
        });

        Schema::table('plastik', function (Blueprint $table) {
            $table->foreign('operasional_id')
                  ->references('id')->on('operasional')->onDelete('cascade');
        });

        Schema::table('sortir', function (Blueprint $table) {
            $table->foreign('operasional_id')
                  ->references('id')->on('operasional')->onDelete('cascade');
        });

        Schema::table('bongkar_muat', function (Blueprint $table) {
            $table->foreign('operasional_id')
                  ->references('id')->on('operasional')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operasional', function (Blueprint $table) {
            //
        });
    }
}
