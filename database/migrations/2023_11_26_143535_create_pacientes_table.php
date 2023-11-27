<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('ci',10);
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('direccion', 200);
            $table->string('edad');
            $table->string('sexo');
            $table->string('tipo_sangre');
            $table->string('email', 100)->nullable();  // se admite null
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
        Schema::dropIfExists('pacientes');
    }
}
