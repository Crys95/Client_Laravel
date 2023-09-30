<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Veiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->uuid('identify')->nullable();
            $table->string('placa')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->integer('ano_fabricacao')->default(0);
            $table->integer('numero_eixos')->default(0);
            $table->string('cor')->nullable();
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
        Schema::dropIfExists('veiculos');
    }
}
