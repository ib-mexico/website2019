<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsersPrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_USUARIOS
        Schema::create('users_privileges', function(Blueprint $table) {
            $table->primary(['pk_user', 'pk_privilege']);
            $table->integer('pk_user')->unsigned();
            $table->integer('pk_privilege')->unsigned();

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');
        });

        //NEW ROW
        DB::statement("INSERT INTO
            users_privileges
        (
            pk_user, pk_privilege, created_pk_user, created_at
        )
        VALUES
            (1, 1, 1, '2017-01-01 00:00:00'),
            (1, 2, 1, '2017-01-01 00:00:00'),
            (1, 3, 1, '2017-01-01 00:00:00'),
            (1, 4, 1, '2017-01-01 00:00:00'),
            (1, 5, 1, '2017-01-01 00:00:00'),
            (1, 6, 1, '2017-01-01 00:00:00'),

            (1, 7, 1, '2017-01-01 00:00:00'),
            (1, 8, 1, '2017-01-01 00:00:00'),
            (1, 9, 1, '2017-01-01 00:00:00');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_privileges');
    }
}
