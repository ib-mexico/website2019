<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSliders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {

            $table->increments('pk_slider');

            $table->string('title', 128)->nullable();
            $table->text('body')->nullable();
            $table->string('url_redirect', 128)->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT');            

            $table->string('file', 128);

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');
            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('sliders', function($table) {
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
        Schema::table('sliders', function($table) {
            $table->dropForeign(['created_pk_user']);
            $table->dropForeign(['updated_pk_user']);
        });

        Schema::dropIfExists('sliders');
    }
}
