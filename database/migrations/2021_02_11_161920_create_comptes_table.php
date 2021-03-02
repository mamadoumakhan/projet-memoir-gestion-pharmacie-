<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('comptes', function (Blueprint $table) {
            $table->id('id_utilisateur');
         //   $table->unsignedBigInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->text('role_compte');
            $table->text('passe_compte');
            $table->dateTime('date_creation_compte');
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
        Schema::dropIfExists('comptes');
    }
}
