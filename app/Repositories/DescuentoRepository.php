<?php

namespace App\Repositories;

use App\Models\Descuento;
use App\Repositories\BaseRepository;

/**
 * Class DescuentoRepository
 * @package App\Repositories
 * @version July 7, 2022, 5:01 pm UTC
*/

class DescuentoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_producto',
        'fecha_inicio',
        'fecha_fin',
        'nombre_promocion',
        'precio_descuento'
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
        return Descuento::class;
    }
}
