<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id_notice');
            // $table->decimal('prix_session');
            // $table->decimal('prix_public');
            // $table->string('tva');
            // $table->string('code_barre');
            // $table->text('posologie');
            // $table->text('effet_indesirable');
            // $table->text('interdiction_medicamenteuse');
            // $table->text('grossesse');
            // $table->text('allaitement');
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
        Schema::dropIfExists('notices');
    }
}