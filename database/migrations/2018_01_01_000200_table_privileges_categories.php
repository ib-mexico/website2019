<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePrivilegesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABLA PRIVILEGIOS_CATEGORIAS
        Schema::create('privileges_categories', function(Blueprint $table) {
            $table->increments('pk_privilege_category');
            $table->string('privilege_category', 80)->unique();
            $table->integer('menu_order')->nullable();
            $table->string('menu_icon', 100)->nullable();
        });



        //NEW ROW
        DB::statement("INSERT INTO
            privileges_categories
        (
            pk_privilege_category, privilege_category, menu_order, menu_icon
        )
        VALUES
            (1, 'Publicaciones', 1, 'mdi-rocket'),
            (2, 'Promociones', 2, 'mdi-flag'),
            (3, 'Slider', 4, 'mdi-image'),
            (4, 'Usuarios', 5, 'mdi-account-multiple')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privileges_categories');
    }
}
