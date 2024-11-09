<?php
namespace App\Controllers;

use WPINT\Framework\Include\Controller\Controller;

class ExampleController extends Controller
{
    
    /**
     * Blank Page
     *
     * @return void
     */
    public function app()
    {
        $title = "WPINT";
        echo view('blank', ['title' => $title]);
        return;
    }

}
