<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_cliente');
            $table->text('id_producto');
            $table->text('id_usuario');
            $table->text('id_contador_factura');
            $table->text('tipo_venta');
            $table->text('tipo_comprobante');
            $table->text('fecha_factura');
            $table->text('iva_5total');
            $table->text('iva_10total');
            $table->text('sub_total');
            $table->text('total_ventas');
            $table->text('total_ahorro');
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
        Schema::drop('ventas');
    }
}
