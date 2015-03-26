<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('usuarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 128);
            $table->string('email', 255);
            $table->string('senha', 128);
            $table->string('remember_token', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('usuarios');
    }

}
