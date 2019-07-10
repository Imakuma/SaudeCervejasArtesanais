<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status_da_entrega');
            $table->float('valor_do_frete', 4, 2);
            $table->date('previsao_da_entrega');
            $table->timestamps();

            //Foreign Keys
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('venda_id')->unsigned();
            $table->bigInteger('pagamento_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
            $table->foreign('venda_id')->references('id')->on('vendas')->onCascade('delete');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos')->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
