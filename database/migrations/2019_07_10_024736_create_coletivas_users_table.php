<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColetivasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coletivas_users', function (Blueprint $table) {
            
            $table->timestamps();

            //Keys
            $table->bigInteger('coletiva_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('coletiva_id')->references('id')->on('coletivas')->onCascade('delete');
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
        Schema::dropIfExists('coletivas_users');
    }
}
