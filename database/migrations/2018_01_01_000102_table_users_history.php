<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA BITACORAS DE USUARIO
        Schema::create('users_history', function (Blueprint $table) {

            $table->increments('pk_user_history');
            $table->integer('pk_user')->unsigned();
            $table->string('description')->default('');
            $table->datetime('created_at');
        });

        //FOREIGNS KEYS
        Schema::table('users_history', function($table) {
            $table->foreign('pk_user')->references('pk_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_history', function($table) {
            $table->dropForeign(['pk_user']);
        });

        Schema::dropIfExists('users_history');
    }
}
