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
            $table->unsignedBigInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->id('id_utilisateur')->references('id_utilisateur')->on('clients')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('type_paiement');
            $table->string('date_facture');
            $table->softDeletes();
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
