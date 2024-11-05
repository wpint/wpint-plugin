<?php
namespace App\Controllers;

use WPINT\Framework\Include\Controller\Controller;
use App\Models\Post;
use Inertia\Inertia;

class ExampleController extends Controller
{
    
    /**
     * Home Page 
     *
     * @param Post $post
     * @return void
     */
    public function app()
    {
        $title = "WPINT";
        echo view('app', ['title' => $title]);
        return;
    }

}
