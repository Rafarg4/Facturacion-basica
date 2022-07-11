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
            $table->increments('id');
            $table->text('id_usuario');
            $table->text('proveedor_id');
            $table->text('tipo_compra');
            $table->text('timbrando');
            $table->text('tipo_comprobante');
            $table->text('numero_factura');
            $table->text('fecha_inicio');
            $table->text('fecha_factura');
            $table->text('impuesto_10');
            $table->text('impuesto_5');
            $table->text('sub_total');
            $table->text('total_compra');
            $table->text('estado_pagado');
            $table->text('borrado');
            $table->text('motivo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
