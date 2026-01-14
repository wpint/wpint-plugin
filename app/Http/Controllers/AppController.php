<?php

namespace App\Http\Controllers;

class AppController
{

    /**
     * Display a listing of the resource.
     */
    public function app()
    {   
        $title = "WPINT";
        echo view('blank', ['title' => $title]);
        return ;
    }

}
