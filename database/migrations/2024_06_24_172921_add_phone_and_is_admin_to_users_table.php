<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneAndIsAdminToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable(); // Добавляем поле телефона, которое может быть пустым
            $table->boolean('is_admin')->default(false); // Добавляем булево поле для определения, является ли пользователь администратором
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone'); // Удаляем поле телефона
            $table->dropColumn('is_admin'); // Удаляем поле is_admin
        });
    }
};
