<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClientaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->uuid('identify')->nullable();
            $table->string('cpf')->nullable();
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->integer('data_nascimento')->default(0);
            $table->integer('email')->default(0);
            $table->string('genero')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
