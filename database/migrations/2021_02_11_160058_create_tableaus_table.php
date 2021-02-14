<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableaus', function (Blueprint $table) {
            $table->increments('id_tableau');
            $table->unsignedBigInteger('id_stock');
            $table->foreign('id_stock')->id('id_stock')->references('id_stock')->on('stocks')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->string('nom_tableau');
            $table->string('description_tableau');
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
        Schema::dropIfExists('tableaus');
    }
}
