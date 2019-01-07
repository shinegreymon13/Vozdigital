<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->string('rut_usuario', 10);
            $table->primary('rut_usuario');
            $table->string('email', 50)->unique();
            $table->string('nom_usuario', 50);
            $table->string('apellido_paterno', 20);
            $table->string('apellido_materno', 20);
            $table->string('password');
            $table->char('estado', 1);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
