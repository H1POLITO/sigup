<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_documentos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('pagamento_id')->unsigned();
            $table->bigInteger('config_pagamento_id')->unsigned();

            $table->foreign('pagamento_id')
                ->references('id')
                ->on('pagamentos')
                ->onDelete('cascade');

            $table->foreign('config_pagamento_id')
                ->references('id')
                ->on('config_pagamentos')
                ->onDelete('cascade');
            
            $table->integer('quantidade');
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
        Schema::dropIfExists('pagamento_documentos');
    }
}
