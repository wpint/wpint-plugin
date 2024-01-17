<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "terms";

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
    protected $primaryKey = 'term_id';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'name',
        'slug',
        'term_group',
    ];
 
    /**
     * This term has many meta
     *
     * @return void
     */
    public function meta()
    {
        return $this->hasMany(TermMeta::class, 'term_id');
    }

    /**
     * This term belongs to many taxonomy
     *
     * @return void
     */
    public function taxonomy()
    {
        // becouse of the structure of wordpress's database 
        // we need to use many to many relationship 
        return $this->belongsToMany(Taxonomy::class, 'term_taxonomy', 'term_taxonomy_id', 'term_id');
    }

        

}