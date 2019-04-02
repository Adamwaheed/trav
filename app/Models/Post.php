<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version April 2, 2019, 12:59 pm UTC
 *
 * @property string title
 * @property string body
 * @property boolean add_to_menu
 * @property boolean status
 * @property string type
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'body',
        'add_to_menu',
        'status',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'body' => 'string',
        'add_to_menu' => 'boolean',
        'status' => 'boolean',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'add_to_menu' => 'required',
        'status' => 'required',
        'type' => 'required'
    ];

    
}
