<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAutorarticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autorarticulo', function (Blueprint $table) {
            $table->foreign(['idArticulo'], 'autorarticulo_ibfk_1')->references(['idArticulo'])->on('articulo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['idAutor'], 'autorarticulo_ibfk_2')->references(['idAutor'])->on('autor')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autorarticulo', function (Blueprint $table) {
            $table->dropForeign('autorarticulo_ibfk_1');
            $table->dropForeign('autorarticulo_ibfk_2');
        });
    }
}
