<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetajetEProduktevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detajet_e_produkteves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produkt_id');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('produkt_id')->references('id')->on('produktets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detajet_e_produkteves');
    }
}
