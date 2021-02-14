<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id_produit');
            $table->unsignedBigInteger('id_categorie');
            $table->foreign('id_categorie')->id('id_categorie')->references('id_categorie')->on('categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('id_lot');
            $table->foreign('id_lot')->id('id_lot')->references('id_lot')->on('lots')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('nom_produit');
            $table->string('prix_session');
            $table->string('prix_public');
            $table->string('tva');
            $table->string('code_barre');
            $table->text('posologie');
            $table->text('effet_indesirable');
            $table->text('interdiction_medicamenteuse');
            $table->text('grossesse');
            $table->text('allaitement');
            $table->string('etat');
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
        Schema::dropIfExists('produits');
    }
}
