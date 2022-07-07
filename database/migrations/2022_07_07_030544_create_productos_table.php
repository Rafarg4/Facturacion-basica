<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_categoria');
            $table->text('id_marca');
            $table->text('nombre_producto');
            $table->text('codigo_barra');
            $table->text('descripcion_producto');
            $table->text('stock');
            $table->text('stock_min');
            $table->text('costo_producto');
            $table->text('unidad');
            $table->text('precio_anterior_venta');
            $table->text('precio_venta');
            $table->text('iva_5');
            $table->text('iva_10');
            $table->text('estado');
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
        Schema::drop('productos');
    }
}
