<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicationProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('indication_produit', function (Blueprint $table) {
        $table->bigIncrements('id_indication_produit');
        $table->unsignedBigInteger('id_indication');
        $table->foreign('id_indication')
            ->references('id_indication')
            ->on('indications')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        $table->unsignedBigInteger('id_produit');
        $table->foreign('id_produit')
            ->references('id_produit')
            ->on('produits')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->string('nom_indication');
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
        Schema::dropIfExists('indication_produits');
    }
}
