<?php
namespace App\Controllers;

use WPINT\Framework\Include\Controller\Controller;
use App\Models\Post;

class ExampleController extends Controller
{
    
    /**
     * admin page method 
     *
     * @param Post $post
     * @return void
     */
    public function page(Post $post)
    {
        $title = "WPINT";
        echo view('wpint', ['title' => $title]);
        return;
    }

    /**
     * rest method
     *
     * @param [type] $data
     * @param Post $post
     * @return void
     */
    public function rest($data, Post $post)
    {
         return $post->find($data['id'])->toArray();
    }
    
    /**
     * ajax method
     *
     * @return void
     */
    public function ajax()
    {
        return wp_send_json_success([
            'test'  => 'test'
        ]);
    }

}
