<?php

namespace App\Repositories;

use App\Models\PagoCompra;
use App\Repositories\BaseRepository;

/**
 * Class PagoCompraRepository
 * @package App\Repositories
 * @version July 8, 2022, 3:21 am UTC
*/

class PagoCompraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'compras_id_compras',
        'monto'
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
        return PagoCompra::class;
    }
}
