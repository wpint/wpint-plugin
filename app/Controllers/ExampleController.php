<?php
namespace App\Controllers;

use WPINT\Framework\Include\Controller\Controller;

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
        echo view('blank', ['title' => $title]);
        return;
    }

}
