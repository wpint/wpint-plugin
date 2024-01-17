<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentMeta extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "commentmeta";

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
     * This meta belongs to a comment
     *
     * @return void
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

}