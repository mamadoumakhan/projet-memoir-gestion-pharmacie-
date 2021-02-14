<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigneDeFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligne_de_factures', function (Blueprint $table) {
            $table->increments('id_ligne_de_factures');
            $table->unsignedBigInteger('id_produit');
            $table->foreign('id_produit')->id('id_produit')->references('id_produit')->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('id_agent');
            $table->foreign('id_agent')->id('id_agent')->references('id_agent')->on('agents')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('id_facture');
            $table->foreign('id_facture')->id('id_facture')->references('id_facture')->on('factures')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->integer('quantite');
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
        Schema::dropIfExists('ligne_de_factures');
    }
}
