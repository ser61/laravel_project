<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPrivilegioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsuarioPrivilegio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idPrivilegio')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idPrivilegio')->references('id')->on('Privilegio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UsuarioPrivilegio');
    }
}
