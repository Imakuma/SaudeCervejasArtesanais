<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeilaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leilaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('lance_minimo', 8, 2);
            $table->float('lance_final', 8, 2);
            $table->date('data_de_fechamento');
            $table->string('status_do_leilao');
            $table->timestamps();

            //Foreign Keys
            $table->bigInteger('produto_id')->unsigned();
            $table->bigInteger('pagamento_id')->unsigned();
            $table->bigInteger('venda_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos')->onCascade('delete');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos')->onCascade('delete');
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
        Schema::dropIfExists('leilaos');
    }
}
