<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Property
 * @package App\Models
 * @version April 2, 2019, 12:55 pm UTC
 *
 * @property string name
 * @property integer category_id
 * @property string body
 * @property bool status
 */
class Property extends Model
{
    use SoftDeletes;

    public $table = 'properties';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'category_id',
        'body',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category_id' => 'integer',
        'body' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'body' => 'required',
        'status' => 'required'
    ];

    
}
