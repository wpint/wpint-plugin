<?php

use Wpint\Support\Facades\AdminRoute;
use Wpint\Route\Enums\RouteHttpMethodEnum;
use App\Controllers\ExampleController;
use App\Middlewares\ExampleMiddleware;
use Wpint\Support\Facades\WebRoute;


// Home route
WebRoute::path('/')
->method(RouteHttpMethodEnum::GET)
->controller([ExampleController::class, 'app'])
->name('home');

// add custom admin route (admin page)
AdminRoute::path('test')
->menuTitle('wpint')
->controller([ExampleController::class, 'app'])
->name('admin_route')
->middleware(ExampleMiddleware::class)
->position(100);

// add custom rest route
// RestRoute::method(RouteHttpMethodEnum::GET)
// ->path('/test-1/(?P<id>\d+)')
// ->namespace('wp/v2/wpint')
// ->permission(function(WP_REST_Request $request)
// {
//     return true;
// })
// ->controller(function(){
//     return true;
// });

// add custom ajax routes
// AjaxRoute::name('like_test')
// ->controller(function(){
//     return wp_send_json_success([
//         'wpint'  => true
//     ]);
// });


