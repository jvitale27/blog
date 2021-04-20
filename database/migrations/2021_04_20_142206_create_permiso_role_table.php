<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_role', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('permiso_id');
            $table->unsignedBigInteger('role_id');
            
            $table->foreign('permiso_id')
                ->references('id')->on('permisos')            //clave foranea con id de tabla permisos
                ->onDelete('cascade')      //si elimino un registro de la tabla permisos me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en permisos se actualiza autom. en permiso_id de esta tabla

            $table->foreign('role_id')
                ->references('id')->on('roles')               //clave foranea con id de tabla roles
                ->onDelete('cascade')      //si elimino un registro de la tabla roles me elimina los registros de esta tabla que tienen la correspondiente clave foranea eliminada
                ->onUpdate('cascade');      //un cambio de id en roles se actualiza autom. en role_id de esta tabla


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
        Schema::dropIfExists('permiso_role');
    }
}
