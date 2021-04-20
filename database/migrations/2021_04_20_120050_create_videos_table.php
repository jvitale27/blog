<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->string('name', 45);
            $table->string('descripcion');
            $table->string('url', 45);
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')               //clave foranea con id de tabla users
                ->onDelete('set null')      //si elimino un registro de la tabla users me setea en null los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en users se actualiza autom. en user_id de esta tabla

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
        Schema::dropIfExists('videos');
    }
}
