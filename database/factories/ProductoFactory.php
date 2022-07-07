<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_categoria' => $this->faker->text,
        'id_marca' => $this->faker->text,
        'nombre_producto' => $this->faker->text,
        'codigo_barra' => $this->faker->text,
        'descripcion_producto' => $this->faker->text,
        'stock' => $this->faker->text,
        'stock_min' => $this->faker->text,
        'costo_producto' => $this->faker->text,
        'unidad' => $this->faker->text,
        'precio_anterior_venta' => $this->faker->text,
        'precio_venta' => $this->faker->text,
        'iva_5' => $this->faker->text,
        'iva_10' => $this->faker->text,
        'estado' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
