<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuncionarios extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('funcionarios', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 128);
            $table->string('email', 255);
            $table->string('setor', 128);
            $table->string('cargo', 128);
            $table->string('foto', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('funcionarios');
    }

}
