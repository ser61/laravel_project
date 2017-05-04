<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->char('permiso');
            $table->integer('idPrivilegio')->unsigned();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('Item');
    }
}
