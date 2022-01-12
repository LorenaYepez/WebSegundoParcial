<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->double('montoTotal');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idEncargado');
            $table->unsignedBigInteger('idPago');
            $table->timestamps();

            $table->foreign('idCliente')->on('personas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idEncargado')->on('personas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idPago')->on('personas')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
