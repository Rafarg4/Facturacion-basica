<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Proveedor
 * @package App\Models
 * @version July 7, 2022, 2:13 am UTC
 *
 * @property string $razon_social
 * @property string $direccion_proveedor
 * @property string $telefono_proveedor
 */
class Proveedor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'proveedors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'razon_social',
        'direccion_proveedor',
        'telefono_proveedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'razon_social' => 'string',
        'direccion_proveedor' => 'string',
        'telefono_proveedor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'razon_social' => 'required',
        'direccion_proveedor' => 'required',
        'telefono_proveedor' => 'required'
    ];

    
}
