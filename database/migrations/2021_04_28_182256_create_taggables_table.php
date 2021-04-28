<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('taggable_id');
            $table->string('taggable_type');
            $table->unsignedBigInteger('tag_id');

             $table->foreign('tag_id')
                ->references('id')->on('tags')               //clave foranea con id de tabla tag
                ->onDelete('cascade');      //si elimino un registro de la tabla tag me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada

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
        Schema::dropIfExists('taggables');
    }
}
