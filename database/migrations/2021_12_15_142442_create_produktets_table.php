<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduktetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produktets', function (Blueprint $table) {
            $table->id();
            $table->string('emri_produktit');
            $table->text('pershkrimi_i_produktit');
            $table->integer('sasia_ne_stok');
            $table->unsignedDecimal('cmimi', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('produktets');
    }
}
