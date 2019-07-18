<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sobrenome')->default(null)->nullable();
            $table->string('user_name')->default(null)->nullable();
            $table->integer('user_tipo'); // 1 -> admin / 2 -> vendedor / 3 -> comprador
            $table->string('email')->unique();
            $table->bigInteger('telefone');
            $table->bigInteger('cpf')->unique();
            $table->timestamp('email_verified_at')->default(null)->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
