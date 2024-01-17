<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "term_taxonomy";

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
    protected $primaryKey = 'term_taxonomy_id';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'term_id',
        'taxonomy',
        'description',
        'parent',
        'count',
    ];
 
    /**
     * This taxonomy has many posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'object_id');
    }
    
    /**
     * This taxonomy has many terms
     *
     * @return void
     */
    public function terms()
    {
        return $this->hasMany(Term::class, 'term_id');
    }

}