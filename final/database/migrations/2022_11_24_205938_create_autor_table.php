<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor', function (Blueprint $table) {
            $table->integer('idAutor', true);
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->string('direccion', 45);
            $table->integer('idInstitucion')->index('idInstitucion');
            $table->tinyInteger('activo');
            $table->timestamp('modificado')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor');
    }
}
