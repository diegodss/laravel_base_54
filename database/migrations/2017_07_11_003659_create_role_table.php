<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('role', function (Blueprint $table) {
            $table->increments('id_role');
            $table->string('role', 100);
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
        Schema::dropIfExists('role');
    }

}
