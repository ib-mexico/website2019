<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->increments('pk_post');
            $table->integer('pk_user')->unsigned();
            $table->integer('pk_category')->unsigned();

            $table->string('title', 128);
            $table->string('slug', 128)->unique();

            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');

            $table->string('file', 128)->nullable();

            $table->integer('views_numb')->default(0);
            $table->boolean('highlight')->default(0);

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('posts', function($table) {
            $table->foreign('pk_user')->references('pk_user')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pk_category')->references('pk_category')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_pk_user')->references('pk_user')->on('users');
            $table->foreign('updated_pk_user')->references('pk_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //FOREIGNS KEYS
        Schema::table('posts', function($table) {
            $table->dropForeign(['pk_user']);
            $table->dropForeign(['pk_category']);
            $table->dropForeign(['created_pk_user']);
            $table->dropForeign(['updated_pk_user']);
        });

        Schema::dropIfExists('posts');
    }
}
