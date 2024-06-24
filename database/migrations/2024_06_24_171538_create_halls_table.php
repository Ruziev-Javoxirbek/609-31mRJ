<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Наименование зала
            $table->timestamps(); // Временные метки создания и обновления записи
        });
    }

    public function down()
    {
        Schema::dropIfExists('halls');
    }
};
