<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_usuario' => $this->faker->text,
        'proveedor_id' => $this->faker->text,
        'tipo_compra' => $this->faker->text,
        'timbrando' => $this->faker->text,
        'tipo_comprobante' => $this->faker->text,
        'numero_factura' => $this->faker->text,
        'fecha_inicio' => $this->faker->text,
        'fecha_factura' => $this->faker->text,
        'impuesto_10' => $this->faker->text,
        'impuesto_5' => $this->faker->text,
        'sub_total' => $this->faker->text,
        'total_compra' => $this->faker->text,
        'estado_pagado' => $this->faker->text,
        'borrado' => $this->faker->text,
        'motivo' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
