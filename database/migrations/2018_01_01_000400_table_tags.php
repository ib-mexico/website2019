<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('pk_tag');
            
            $table->string('tag', 128);
            $table->string('slug', 128)->unique();

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');

            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('tags', function($table) {
            $table->foreign('created_pk_user')->references('pk_user')->on('users');
            $table->foreign('updated_pk_user')->references('pk_user')->on('users');
        });


        //NEW ROW
        DB::statement("INSERT INTO
            tags
        (
            pk_tag, tag, slug, created_pk_user, created_at, updated_pk_user,
            updated_at, deleted
        )
        VALUES
            (1, 'Fortinet', 'fortinet', 1, NOW(), 1, NOW(), 0),
            (2, 'Programación', 'programacion', 1, NOW(), 1, NOW(), 0),
            (3, 'Hosting Web', 'hosting-web', 1, NOW(), 1, NOW(), 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //FOREIGNS KEYS
        Schema::table('tags', function($table) {
            $table->dropForeign(['created_pk_user']);
            $table->dropForeign(['updated_pk_user']);
        });

        Schema::dropIfExists('tags');
    }
}
