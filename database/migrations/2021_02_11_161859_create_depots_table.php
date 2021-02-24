<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
        $table->bigIncrements('id_depot');
        $table->unsignedBigInteger('id_agent');
        $table->foreign('id_agent')
            ->references('id_agent')
            ->on('agents')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        $table->unsignedBigInteger('id_client');
        $table->foreign('id_client')
            ->references('id_client')
            ->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        $table->dateTime('date_depot');
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
        Schema::dropIfExists('depots');
    }
}
