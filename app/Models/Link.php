<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    /**
     * $table
     *
     * @var string
     */
    protected $table = "links";

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
    protected $primaryKey = 'link_id';

    /**
     * $fillable
     *
     * @var array
     */
    public $fillable = [
        'link_url',
        'link_name',
        'link_image',
        'link_target',
        'link_description',
        'link_visible',
        'link_owner',
        'link_rating',
        'link_updated',
        'link_rel',
        'link_notes',
        'link_rss',
    ];

}