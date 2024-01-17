<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermMeta extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "termmeta";

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
        'term_id',
        'meta_key',
        'meta_value',
    ];
    
    /**
     * This term meta belongs to a term.
     *
     * @return void
     */
    public function term() 
    {
        return $this->belongsTo(Term::class, 'term_id');    
    }
 
}