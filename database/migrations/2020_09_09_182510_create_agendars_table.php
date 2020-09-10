<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendars', function (Blueprint $table) {
            $table->id();
            $table->integer('paciente_id');
            $table->string('fecha');
            $table->integer('hora');
            $table->integer('tratamientoid');
            $table->string('comentario');
            $table->double('precio');
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
        Schema::dropIfExists('agendars');
    }
}
