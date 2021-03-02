<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Article extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('articles', function (Blueprint $table) {
            $table->id('id_article');
            $table->dateTime('date_peremption');
            $table->integer('quantite');
            $table->enum('etat',['vendu','perimé','retourné'])->defaul('vendu');
            $table->unsignedBigInteger('id_produit');
            $table->foreign('id_produit')->references('id_produit')->on('produits')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('id_fournisseur');
            $table->foreign('id_fournisseur')->references('id_fournisseur')->on('fournisseurs')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        //
    }
}
