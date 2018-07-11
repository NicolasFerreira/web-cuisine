<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date_1');
            $table->string('horaires_1');
            $table->string('date_2');
            $table->string('horaires_2');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->integer('numero');
            $table->string('commentaires');
            $table->string('date_envoi');
            $table->boolean('confirmed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdv');
    }
}
