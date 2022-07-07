<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Marca
 * @package App\Models
 * @version July 7, 2022, 2:38 am UTC
 *
 * @property string $nombre_marca
 */
class Marca extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'marcas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre_marca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_marca' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_marca' => 'required'
    ];

    
}
