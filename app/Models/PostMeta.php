<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "postmeta";

    /**
     * $timetamps
     *
     * @var boolean
     */
    public $timestamps = false; 

    /**
     * $primaryKey
     *
     * @var string
     */
    protected $primaryKey = 'meta_id';

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
     * This meta belongs to a post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'ID');
    }

}