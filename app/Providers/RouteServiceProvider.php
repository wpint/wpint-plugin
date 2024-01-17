<?php 
namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Wpint\Support\Facades\WPAPI;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        // Register your service
    }

    /**
     * Bootstrap any application service
     *
     * @return void
     */
    public function boot(): void
    {

        // register routes.php file as a default route file
        // You can either customize or add another route files
        WPAPI::hook()
        ->name('wpfm_initialized')
        ->callback(function($app){
            $path = $app->routePath() . DIRECTORY_SEPARATOR . 'routes.php';
            if(File::exists($path))
            {
                File::requireOnce($path);
            }
        })
        ->register();

    }

}