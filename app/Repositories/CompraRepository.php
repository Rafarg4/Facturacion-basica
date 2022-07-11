<?php

namespace App\Repositories;

use App\Models\Compra;
use App\Repositories\BaseRepository;

/**
 * Class CompraRepository
 * @package App\Repositories
 * @version July 7, 2022, 5:28 pm UTC
*/

class CompraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_usuario',
        'proveedor_id',
        'tipo_compra',
        'timbrando',
        'tipo_comprobante',
        'numero_factura',
        'fecha_inicio',
        'fecha_factura',
        'impuesto_10',
        'impuesto_5',
        'sub_total',
        'total_compra',
        'estado_pagado',
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
        return Compra::class;
    }
}
