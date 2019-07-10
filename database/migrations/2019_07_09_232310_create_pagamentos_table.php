<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_de_pagamento');
            $table->tinyInteger('pagamento_compensado');
            $table->tinyInteger('pagamento_estornado')->nullable();
            $table->float('valor_do_estorno', 8, 2)->nullable();
            $table->string('status_do_estorno')->nullable();
            $table->timestamps();

            //Foreign Keys
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
