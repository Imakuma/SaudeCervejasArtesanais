<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_vendas', function (Blueprint $table) {
            $table->float('preco_unitario', 8, 2); //preço de cada produto
            $table->timestamps();

            //Keys
            $table->bigInteger('produto_id')->unsigned();
            $table->bigInteger('venda_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos')->onCascade('delete');
            $table->foreign('venda_id')->references('id')->on('vendas')->onCascade('delete');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_vendas');
    }
}
