<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('valor_da_venda', 8, 2);
            $table->date('data_da_venda');
            $table->integer('nota_fiscal')->unique();
            $table->string('status_da_venda');
            $table->timestamps();

            //Foreign Keys
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('pagamento_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
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
        Schema::dropIfExists('vendas');
    }
}
