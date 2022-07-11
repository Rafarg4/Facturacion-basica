<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Repositories\BaseRepository;

/**
 * Class VentaRepository
 * @package App\Repositories
 * @version July 9, 2022, 12:56 am UTC
*/

class VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_cliente',
        'id_producto',
        'id_usuario',
        'id_contador_factura',
        'tipo_venta',
        'tipo_comprobante',
        'fecha_factura',
        'iva_5total',
        'iva_10total',
        'sub_total',
        'total_ventas',
        'total_ahorro',
        'borrado',
        'motivo'
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
        return Venta::class;
    }
}
