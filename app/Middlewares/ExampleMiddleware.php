<?php
namespace App\Middlewares;

use Closure;
use Illuminate\Http\Request;
use WPINT\Framework\Include\Middleware\Handler;

class ExampleMiddleware extends Handler
{

    public function handle(Request $request, Closure $next)
    {

        if($request->has('page'))
        {
            exit;
        }

    }

}