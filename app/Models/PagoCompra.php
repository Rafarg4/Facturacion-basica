<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PagoCompra
 * @package App\Models
 * @version July 8, 2022, 3:21 am UTC
 *
 * @property string $compras_id_compras
 * @property string $monto
 */
class PagoCompra extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'pagos_compras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'compras_id_compras',
        'monto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'compras_id_compras' => 'string',
        'monto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'compras_id_compras' => 'required',
        'monto' => 'required'
    ];

     public function compra (){
     return $this-> belongsTo('App\Models\Compra');

    }
}
