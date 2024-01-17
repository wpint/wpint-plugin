<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// This model should be removed
class Example extends Model
{
    use HasFactory;

    /**
     * $table
     *
     * @var string
     */
    protected $table = "example";

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'email',
    ];

}