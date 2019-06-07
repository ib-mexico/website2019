<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA ADMINISTRADORES
        Schema::create('users', function(Blueprint $table) {
            
            $table->increments('pk_user');
            $table->integer('pk_user_type')->unsigned();
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->string('email', 150)->unique()->nullable();
            $table->string('profile_pic', 255)->default('avatar.jpg');
            
            /*** CONTROL DE ACCESO ***/
            $table->string('user', 150)->unique()->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();

            $table->integer('access_numb')->default(0);
            $table->datetime('last_access')->nullable();

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');

            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('users', function($table) {
            $table->foreign('pk_user_type')->references('pk_user_type')->on('users_types');
            $table->foreign('created_pk_user')->references('pk_user')->on('users');
            $table->foreign('updated_pk_user')->references('pk_user')->on('users');
        });

        //NEW ROW
        DB::statement("INSERT INTO
                users
            (
                pk_user, 
                pk_user_type, 
                name, 
                last_name, 
                email,
                user,
                password,
                created_pk_user, 
                created_at, 
                updated_pk_user, 
                updated_at, 
                deleted
            ) VALUES (
                1, 
                1, 
                'Jorge Luis', 
                'Cortes', 
                'jorge.cortes@ib-mexico.com',
                'admin',
                '" . bcrypt('1234567890') . "',
                1, 
                NOW(), 
                1, 
                NOW(), 
                0
            )");  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //FOREIGNS KEYS
        Schema::table('users', function($table) {
            $table->dropForeign(['pk_user_type']);
            $table->dropForeign(['created_pk_user']);
            $table->dropForeign(['updated_pk_user']);
        });

        Schema::dropIfExists('users');
    }
}
