<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "options";

    /**
     * $timestamps
     *
     * @var boolean
     */
    public $timestamps = false; 

    /**
     * $primaryKey
     *
     * @var string
     */
    protected $primaryKey = 'option_id';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'option_name',
        'option_value',
        'autoload',
    ];

}