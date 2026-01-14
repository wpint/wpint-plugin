<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    
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

    
    protected $hidden = ['user_pass'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'user_pass' => 'hashed',
        ];
    }

    /**
     * Get auth user password
     *
     * @return void
     */
    public function getAuthPassword()
    {
        return $this->user_pass;
    }
    
    /**
     * Get the wp user roles
     *
     * @return void
     */
    function roles()
    {
        $meta = $this->meta()->where('user_id', $this->ID)
            ->where('meta_key', 'wp_capabilities')
            ->value('meta_value');

        return array_keys(unserialize($meta));
    }

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