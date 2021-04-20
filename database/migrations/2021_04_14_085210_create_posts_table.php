<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('body');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')               //clave foranea con id de tabla users
                ->onDelete('set null')      //si elimino un registro de la tabla users me setea en null los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en users se actualiza autom. en user_id de esta tabla

            $table->foreign('categoria_id')
                ->references('id')->on('categorias')               //clave foranea con id de tabla categorias
                ->onDelete('set null')      //si elimino un registro de la tabla categorias me setea en null los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en categorias se actualiza autom. en categoria_id de esta tabla

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
        Schema::dropIfExists('posts');
    }
}
