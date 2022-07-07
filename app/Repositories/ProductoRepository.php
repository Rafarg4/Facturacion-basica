<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version July 7, 2022, 3:05 am UTC
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_categoria',
        'id_marca',
        'nombre_producto',
        'codigo_barra',
        'descripcion_producto',
        'stock',
        'stock_min',
        'costo_producto',
        'unidad',
        'precio_anterior_venta',
        'precio_venta',
        'iva_5',
        'iva_10',
        'estado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Producto::class;
    }
}
