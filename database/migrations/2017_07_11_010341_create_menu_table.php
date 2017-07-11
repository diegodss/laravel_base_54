<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('menu_name', 100);
            $table->integer('id_menu_parent');
            $table->integer('menu_item');
            $table->integer('menu_order');
            $table->string('link', 100);
            $table->string('slug', 100);
            $table->boolean('menu_view')->default(1);
            $table->boolean('menu_insert')->default(1);
            $table->boolean('menu_update')->default(1);
            $table->boolean('menu_delete')->default(1);
            $table->string('fl_status')->default(1);
            $table->string('user_insert')->default(0);
            $table->string('user_update')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('menu');
    }

}
