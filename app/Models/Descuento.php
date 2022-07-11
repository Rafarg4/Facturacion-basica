<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Descuento
 * @package App\Models
 * @version July 7, 2022, 5:01 pm UTC
 *
 * @property string $id_producto
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $nombre_promocion
 * @property string $precio_descuento
 */
class Descuento extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'descuentos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_producto',
        'fecha_inicio',
        'fecha_fin',
        'nombre_promocion',
        'precio_descuento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_producto' => 'string',
        'fecha_inicio' => 'string',
        'fecha_fin' => 'string',
        'nombre_promocion' => 'string',
        'precio_descuento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_producto' => 'required',
        'fecha_inicio' => 'required',
        'fecha_fin' => 'required',
        'nombre_promocion' => 'required',
        'precio_descuento' => 'required'
    ];
    public function producto (){
     return $this-> belongsTo('App\Models\Producto','id_producto');

    }
    
}
