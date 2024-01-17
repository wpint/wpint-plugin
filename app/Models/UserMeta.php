<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "usermeta";

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
    protected $primaryKey = 'umeta_id';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'meta_key',
        'meta_value',
    ];
    
    /**
     * This user meta belongs to a user
     *
     * @return void
     */
    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');    
    }
 
}