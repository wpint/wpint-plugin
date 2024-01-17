<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "comments";

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
    protected $primaryKey = 'comment_ID';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'comment_post_id',
        'comment_author',
        'comment_author_email',
        'comment_author_url',
        'comment_author_IP',
        'comment_date',
        'comment_date_gmt',
        'comment_content',
        'comment_karma',
        'comment_approved',
        'comment_agent',
        'comment_type',
        'comment_parent',
        'user_id',
        'user_id',
    ];
    
    /**
     * This comment has maney commnet meta
     *
     * @return void
     */
    public function meta()
    {
        return $this->hasMany(CommentMeta::class, 'comment_id');
    }
    
    /**
     * This comment belongs to a post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'comment_post_ID');
    }

    /**
     * This comment belongs to a user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}