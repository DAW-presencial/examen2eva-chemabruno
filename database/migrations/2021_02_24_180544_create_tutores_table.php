<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('empresa', 30);
            $table->string('nif', 12);
            $table->string('documento')->enum('dni', 'nie', 'pasaporte', 'sin espefificar');
            $table->string('nombre', 15);
            $table->string('apellido1', 15);
            $table->string('apellido2', 15)->nullable();
            $table->string('documento_pais');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('status')->enum('activo', 'inactivo')->nullable();
            $table->string('telefono', 12)->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}