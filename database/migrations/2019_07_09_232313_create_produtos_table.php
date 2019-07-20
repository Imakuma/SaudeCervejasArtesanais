<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produto_familia');
            $table->string('produto_tipo');
            $table->string('produto_imagem');
            $table->string('produtor');
            $table->string('envase')->nullable();
            $table->float('preco_de_compra', 8, 2)->nullable();
            $table->float('preco_de_venda', 8, 2);
            $table->date('validade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
