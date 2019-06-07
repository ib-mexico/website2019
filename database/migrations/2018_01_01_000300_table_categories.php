<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('pk_category');
            
            $table->string('category', 128);
            $table->string('slug', 128)->unique();
            $table->mediumText('body')->nullable();

            $table->integer('created_pk_user')->unsigned();
            $table->datetime('created_at');

            $table->integer('updated_pk_user')->unsigned();
            $table->datetime('updated_at');
            $table->boolean('deleted')->default(0);
        });

        //FOREIGNS KEYS
        Schema::table('categories', function($table) {
            $table->foreign('created_pk_user')->references('pk_user')->on('users');
            $table->foreign('updated_pk_user')->references('pk_user')->on('users');
        });


        //NEW ROW
        DB::statement("INSERT INTO
            categories
        (
            pk_category, category, slug, created_pk_user, created_at, updated_pk_user,
            updated_at, deleted
        )
        VALUES
            (1, 'Tecnología', 'tecnologia', 1, NOW(), 1, NOW(), 0),
            (2, 'Noticias', 'noticias', 1, NOW(), 1, NOW(), 0),
            (3, 'Video Vigilancia', 'video-vigilancia', 1, NOW(), 1, NOW(), 0)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //FOREIGNS KEYS
        Schema::table('categories', function($table) {
            $table->dropForeign(['created_pk_user']);
            $table->dropForeign(['updated_pk_user']);
        });

        Schema::dropIfExists('categories');
    }
}
