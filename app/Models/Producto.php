<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 * @package App\Models
 * @version July 7, 2022, 3:05 am UTC
 *
 * @property string $id_categoria
 * @property string $id_marca
 * @property string $nombre_producto
 * @property string $codigo_barra
 * @property string $descripcion_producto
 * @property string $stock
 * @property string $stock_min
 * @property string $costo_producto
 * @property string $unidad
 * @property string $precio_anterior_venta
 * @property string $precio_venta
 * @property string $iva_5
 * @property string $iva_10
 * @property string $estado
 */
class Producto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_categoria' => 'string',
        'id_marca' => 'string',
        'nombre_producto' => 'string',
        'codigo_barra' => 'string',
        'descripcion_producto' => 'string',
        'stock' => 'string',
        'stock_min' => 'string',
        'costo_producto' => 'string',
        'unidad' => 'string',
        'precio_anterior_venta' => 'string',
        'precio_venta' => 'string',
        'iva_5' => 'string',
        'iva_10' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_categoria' => 'required',
        'id_marca' => 'required',
        'nombre_producto' => 'required',
        'codigo_barra' => 'required',
        'descripcion_producto' => 'required',
        'stock' => 'required',
        'stock_min' => 'required',
        'costo_producto' => 'required',
        'unidad' => 'required',
        'precio_anterior_venta' => 'required',
        'precio_venta' => 'required',
        'iva_5' => 'required',
        'iva_10' => 'required',
        'estado' => 'required'
    ];

     public function categoria (){
     return $this-> belongsTo('App\Models\Categoria','id_categoria');

    }
     public function marca (){
     return $this-> belongsTo('App\Models\Marca','id_marca');

    }
     public function descuento (){
        return $this-> hasMany('App\Models\Descuento');
    }
    public function compra (){
     return $this-> belongsTo('App\Models\Compra');

    }
}
