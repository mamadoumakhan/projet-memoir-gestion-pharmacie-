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
        Schema::disableForeignKeyConstraints();
        Schema::create('produits', function (Blueprint $table) 
        {
            $table->increments('id_produit');
            $table->unsignedBigInteger('id_categorie');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('id_tableau');
            $table->foreign('id_tableau')->id('id_tableau')->references('id_tableau')->on('lots')
            ->onDelete('restrict')
            ->onUpdate('restrict');  
            $table->string('nom_produit');
            $table->decimal('tva');
            $table->string('code_barre');
            $table->string('posologie');
            $table->string('effet_indesirable');
            $table->string('interdiction_medicamenteuse');
            $table->string('grossesse');
            $table->string('allaitement');
            $table->decimal('prix_public');
            $table->decimal('prix_session');
            // $table->dateTime('date_peremption');
            // $table->enum('etat',['vendu','perimé','retourné'])->defaul('vendu');
            //$table->integer('quantite');
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
        Schema::dropIfExists('produits');
    }
}