<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "users";

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
    protected $primaryKey = 'ID';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'user_login',
        'user_pass',
        'user_nicename',
        'user_email',
        'user_url',
        'user_registered',
        'user_activation_key',
        'user_status',
        'display_name',
    ];
    
    /**
     * This user has many user meta
     *
     * @return void
     */
    public function meta()
    {
        return $this->hasMany(UserMeta::class, 'user_id');
    }

    /**
     * This user has many posts
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_author');
    }
    
    /**
     * This user has many comments
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
 
}