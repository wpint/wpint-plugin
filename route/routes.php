<?php

use Wpint\Support\Facades\AdminRoute;
use Wpint\Support\Facades\AjaxRoute;
use Wpint\Support\Facades\RestRoute;
use Wpint\Route\Enums\RouteHttpMethodEnum;
use App\Controllers\ExampleController;

// add custom admin route (admin page)
AdminRoute::path('test')
->menuTitle('wpint')
->controller([ExampleController::class, 'page'])
->name('route_one')
->position(100);

// add custom rest route
RestRoute::method(RouteHttpMethodEnum::GET)
->path('/test-1/(?P<id>\d+)')
->namespace('wp/v2/wpint')
->permission(function(WP_REST_Request $request)
{
    return true;
})
->controller([ExampleController::class, 'rest']);

// add custom ajax route
AjaxRoute::name('like_test')
->controller([ExampleController::class, 'ajax']);

// add custom child of route_one   
// AdminRoute::path('test-2')
// ->capability('edit_posts')
// ->parent($route1)
// ->middleware(IsAdminMiddleware::class)
// ->controller([ExampleController::class, 'test']);
