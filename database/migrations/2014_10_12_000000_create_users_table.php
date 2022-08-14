<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('clave');
            $table->string('cedula');
            $table->string('correo')->unique();
            $table->string('dire_municipio');
            $table->string('dire_localidad');
            $table->string('tele_fijo');
            $table->string('tele_movil');
			$table->string('centro_medico');
			$table->integer('admin');
		
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
