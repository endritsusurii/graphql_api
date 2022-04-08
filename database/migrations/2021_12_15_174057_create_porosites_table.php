<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorositesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porosites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('klientet_id');
            $table->unsignedBigInteger('detajet_e_porosise_id');
            $table->datetime('data_e_dergeses');
            $table->boolean('statusi');
            $table->text('koment')->nullable('0');
            $table->timestamps();
            $table->foreign('klientet_id')->references('id')->on('klientets');
            $table->foreign('detajet_e_porosise_id')->references('id')->on('detajet_e_porosises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porosites');
    }
}
