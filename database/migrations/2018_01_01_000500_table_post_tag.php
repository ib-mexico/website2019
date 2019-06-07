<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {

            $table->increments('pk_post_tag');
            $table->integer('pk_post')->unsigned();
            $table->integer('pk_tag')->unsigned();
        });

        //FOREIGNS KEYS
        Schema::table('post_tag', function($table) {
            $table->foreign('pk_post')->references('pk_post')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pk_tag')->references('pk_tag')->on('tags')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::table('post_tag', function($table) {
            $table->dropForeign(['pk_post']);
            $table->dropForeign(['pk_tag']);
        });

        Schema::dropIfExists('post_tag');
    }
}
