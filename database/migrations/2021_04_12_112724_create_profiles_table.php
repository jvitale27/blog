<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);

            $table->unsignedBigInteger('user_id')->unique();  //mismo tipo de dato que el id en tabla users

            $table->foreign('user_id')
                ->references('id')->on('users')               //clave foranea con id de tabla users
                ->onDelete('cascade')      //si elimino un registro de la tabla users me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en users se actualiza autom. en user_id de esta tabla
/*
            $table->unsignedBigInteger('user_id')->unique()->nullable();  //mismo tipo de dato que el id en tabla users
            $table->foreign('user_id')
                ->references('id')->on('users')               //clave foranea con id de tabla users
                ->onDelete('set null');      //si elimino un registro de la tabla users me setea NULL los registros de esta tabla que tienen la correspondiente clave foranea eliminada. El campo user_id debe definirse como NULLABLE!
                ->onUpdate('cascade');  //un cambio de id en users se actualiza autom. en user_id de esta tabla
*/

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
        Schema::dropIfExists('profiles');
    }
}
