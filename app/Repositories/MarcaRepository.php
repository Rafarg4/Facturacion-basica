<?php

namespace App\Repositories;

use App\Models\Marca;
use App\Repositories\BaseRepository;

/**
 * Class MarcaRepository
 * @package App\Repositories
 * @version July 7, 2022, 2:38 am UTC
*/

class MarcaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_marca'
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
        return Marca::class;
    }
}
