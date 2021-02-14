<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id_lot');
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_fournisseur')->id('id_fournisseur')->references('id_fournisseur')->on('fournisseurs')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('nom_lot');
            $table->string('quantite_lot');
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
        Schema::dropIfExists('lots');
    }
}
