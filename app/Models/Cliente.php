<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cliente
 * @package App\Models
 * @version July 7, 2022, 1:34 am UTC
 *
 * @property string $razon_social
 * @property string $ruc_cliente
 * @property string $direccion_cliente
 * @property string $telefono_cliente
 */
class Cliente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'razon_social',
        'ruc_cliente',
        'direccion_cliente',
        'telefono_cliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'razon_social' => 'string',
        'ruc_cliente' => 'string',
        'direccion_cliente' => 'string',
        'telefono_cliente' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'razon_social' => 'required',
        'ruc_cliente' => 'required',
        'direccion_cliente' => 'required',
        'telefono_cliente' => 'required'
    ];

    
}
