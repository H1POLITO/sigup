<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoPropinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_propinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('pagamento_id')->unsigned();
            $table->bigInteger('config_propina_id')->unsigned();
            $table->string('meses_pago');
            $table->bigInteger('mes_id')->unsigned();

            $table->foreign('pagamento_id')
                ->references('id')
                ->on('pagamentos')
                ->onDelete('cascade');

            $table->foreign('config_propina_id')
                ->references('id')
                ->on('config_pagamento_propinas')
                ->onDelete('cascade');
                
            $table->foreign('mes_id')
                ->references('id')
                ->on('mes')
                ->onDelete('cascade');

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
        Schema::dropIfExists('pagamento_propinas');
    }
}
