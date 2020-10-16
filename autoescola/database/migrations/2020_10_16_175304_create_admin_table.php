<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('usuarios');
            $table->string('nome_admin');
            $table->foreign('nome_admin')->references('nome')->on('usuarios');
            $table->integer('idade');
            $table->string('usuario_admin');
            $table->foreign('usuario_admin')->references('usuario')->on('usuarios');
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
        Schema::dropIfExists('admins');
    }
}
