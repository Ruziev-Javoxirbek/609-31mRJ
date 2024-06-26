<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('movie_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->constrained('films');
            $table->foreignId('hall_id')->constrained('halls');
            $table->dateTime('start_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movie_sessions');
    }
}

