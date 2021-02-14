<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id_facture');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->id('id_client')->references('id_client')->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('type_paiement');
            $table->string('date_acture');
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
        Schema::dropIfExists('factures');
    }
}
