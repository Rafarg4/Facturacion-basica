<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Venta
 * @package App\Models
 * @version July 9, 2022, 12:56 am UTC
 *
 * @property string $id_cliente
 * @property string $id_producto
 * @property string $id_usuario
 * @property string $id_contador_factura
 * @property string $tipo_venta
 * @property string $tipo_comprobante
 * @property string $fecha_factura
 * @property string $iva_5total
 * @property string $iva_10total
 * @property string $sub_total
 * @property string $total_ventas
 * @property string $total_ahorro
 * @property string $borrado
 * @property string $motivo
 */
class Venta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ventas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_cliente' => 'string',
        'id_producto' => 'string',
        'id_usuario' => 'string',
        'id_contador_factura' => 'string',
        'tipo_venta' => 'string',
        'tipo_comprobante' => 'string',
        'fecha_factura' => 'string',
        'iva_5total' => 'string',
        'iva_10total' => 'string',
        'sub_total' => 'string',
        'total_ventas' => 'string',
        'total_ahorro' => 'string',
        'borrado' => 'string',
        'motivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_cliente' => 'required',
        'id_producto' => 'required',
        'id_usuario' => 'required',
        'id_contador_factura' => 'required',
        'tipo_venta' => 'required',
        'tipo_comprobante' => 'required',
        'fecha_factura' => 'required',
        'iva_5total' => 'required',
        'iva_10total' => 'required',
        'sub_total' => 'required',
        'total_ventas' => 'required',
        'total_ahorro' => 'required',
        'borrado' => 'required',
        'motivo' => 'required'
    ];

    
}
