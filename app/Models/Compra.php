<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Compra
 * @package App\Models
 * @version July 7, 2022, 5:28 pm UTC
 *
 * @property string $id_usuario
 * @property string $proveedor_id
 * @property string $tipo_compra
 * @property string $timbrado
 * @property string $tipo_comprobante
 * @property string $numero_factura
 * @property string $fecha_inicio
 * @property string $fecha_factura
 * @property string $impuesto_10
 * @property string $impuesto_5
 * @property string $sub_total
 * @property string $total_compra
 * @property string $estado_pagado
 * @property string $borrado
 * @property string $motivo
 */
class Compra extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'compras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_usuario',
        'proveedor_id',
        'tipo_compra',
        'timbrado',
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
        'motivo',
        'id_producto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_usuario' => 'string',
        'proveedor_id' => 'string',
        'tipo_compra' => 'string',
        'timbrado' => 'string',
        'tipo_comprobante' => 'string',
        'numero_factura' => 'string',
        'fecha_inicio' => 'string',
        'fecha_factura' => 'string',
        'impuesto_10' => 'string',
        'impuesto_5' => 'string',
        'sub_total' => 'string',
        'total_compra' => 'string',
        'estado_pagado' => 'string',
        'borrado' => 'string',
        'motivo' => 'string',
        'id_producto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_usuario' => 'required',
        'id_producto' => 'required',
        'proveedor_id' => 'required',
        'tipo_compra' => 'required',
        'timbrado' => 'required',
        'tipo_comprobante' => 'required',
        'numero_factura' => 'required',
        'fecha_inicio' => 'required',
        'fecha_factura' => 'required',
        'impuesto_10' => 'required',
        'impuesto_5' => 'required',
        'sub_total' => 'required',
        'total_compra' => 'required',
        'estado_pagado' => 'required',
        'borrado' => 'required',
        'motivo' => 'required'
    ];

     public function proveedor (){
     return $this-> belongsTo('App\Models\Proveedor');

    }
    public function producto (){
     return $this-> belongsTo('App\Models\Producto','id_producto');

    }
     public function pagos (){
        return $this-> hasMany('App\Models\PagoCompra','compras_id_compras');
    }
}
