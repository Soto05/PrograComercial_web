<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autor', function (Blueprint $table) {
            $table->foreign(['idInstitucion'], 'autor_ibfk_1')->references(['idInstitucion'])->on('institucion')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autor', function (Blueprint $table) {
            $table->dropForeign('autor_ibfk_1');
        });
    }
}
