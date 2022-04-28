<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigPagamentoPropinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_pagamento_propinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('preco', 11, 2);
            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')
                ->references('id')
                ->on('cursos')
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
        Schema::dropIfExists('config_pagamento_propinas');
    }
}
