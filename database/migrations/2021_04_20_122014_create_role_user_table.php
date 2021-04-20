<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('role_id')
                ->references('id')->on('roles')               //clave foranea con id de tabla roles
                ->onDelete('cascade')      //si elimino un registro de la tabla roles me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en roles se actualiza autom. en role_id de esta tabla

            $table->foreign('user_id')
                ->references('id')->on('users')               //clave foranea con id de tabla users
                ->onDelete('cascade')      //si elimino un registro de la tabla users me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada
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
        Schema::dropIfExists('role_user');
    }
}
