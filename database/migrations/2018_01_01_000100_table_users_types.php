<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //USERS TYPES TABLE
        Schema::create('users_types', function (Blueprint $table) {

            $table->increments('pk_user_type');
            $table->string('user_type');
            $table->string('description')->default('');

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            
            $table->boolean('deleted')->default(0);
        });

        //REGISTRO DE TIPOS DE USUARIOS
        DB::statement("INSERT INTO
            users_types
        (
            pk_user_type, user_type, description, created_pk_user, created_at, updated_pk_user, updated_at, deleted
        )
            VALUES
        ( 1, 'Administrador', 'Administradores principales del sistema', 1, NOW(), 1, NOW(), 0), 
        ( 2, 'Monitor', 'Administradores de menor rango, solo pueden monitorear algunas caracteristicas.', 1, NOW(), 1, NOW(), 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_types');
    }
}
