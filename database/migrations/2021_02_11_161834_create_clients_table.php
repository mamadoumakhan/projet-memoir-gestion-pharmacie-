<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id_utilisateur');
           // $table->unsignedBigInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->string('cni_client');

            $table->decimal('montant_bon_client');
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
        Schema::dropIfExists('clients');
    }
}
