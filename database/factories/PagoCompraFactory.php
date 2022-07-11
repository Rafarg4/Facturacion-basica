<?php

namespace Database\Factories;

use App\Models\PagoCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagoCompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PagoCompra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'compras_id_compras' => $this->faker->text,
        'monto' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
