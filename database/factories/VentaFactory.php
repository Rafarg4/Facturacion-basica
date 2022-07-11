<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente' => $this->faker->text,
        'id_producto' => $this->faker->text,
        'id_usuario' => $this->faker->text,
        'id_contador_factura' => $this->faker->text,
        'tipo_venta' => $this->faker->text,
        'tipo_comprobante' => $this->faker->text,
        'fecha_factura' => $this->faker->text,
        'iva_5total' => $this->faker->text,
        'iva_10total' => $this->faker->text,
        'sub_total' => $this->faker->text,
        'total_ventas' => $this->faker->text,
        'total_ahorro' => $this->faker->text,
        'borrado' => $this->faker->text,
        'motivo' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
