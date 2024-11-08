<?php

return [

    //Your plugin's domain name of translation
    'translate_domain'    =>  env('APP_TRNAS_DOMAIN', 'wpint_translate'),

    //Plugin path
    'plugin_path' => WPINT_PLUGIN_PATH,
    

    //Plugin URI
    'plugin_uri' => WPINT_PLUGIN_URI,
    
    //Providers
    'providers' => [
        \WPINT\Framework\Providers\AppServiceProvider::class, 
        \WPINT\Framework\Providers\EnvServiceProvider::class, 
        \WPINT\Framework\Providers\RequestServiceProvider::class, 
        \Illuminate\Events\EventServiceProvider::class,
        \Illuminate\Database\DatabaseServiceProvider::class,
        \Illuminate\Cache\CacheServiceProvider::class,
        \Illuminate\Session\SessionServiceProvider::class,
        \Illuminate\Validation\ValidationServiceProvider::class,
        \Illuminate\Filesystem\FilesystemServiceProvider::class,
        \Illuminate\View\ViewServiceProvider::class,
        \WPINT\Framework\Providers\FileServiceProvider::class,
        \WPINT\Framework\Providers\FileDirectServiceProvider::class,
        \WPINT\Framework\Providers\CLIServiceProvider::class,
        \WPINT\Framework\Providers\MigrationServiceProvider::class,
        \WPINT\Framework\Providers\ViteServiceProvider::class,
        \Wpint\WPAPI\WPAPIServiceProvider::class,
        
        // App Providers
        \App\Providers\WPServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,        
        \WPINT\Inertia\InertiaServiceProvider::class,
        // \Wpint\JWT\JWTServiceProvider::class,
    ],

    
    'aliases' => [
        'app'       =>  \WPINT\Framework\Providers\AppServiceProvider::class, 
        'request'       =>  \WPINT\Framework\Providers\RequestServiceProvider::class, 
        'env'       =>  \WPINT\Framework\Providers\EnvServiceProvider::class, 
        'events'    => \Illuminate\Events\EventServiceProvider::class,
        'db'        => \Illuminate\Database\DatabaseServiceProvider::class,
        'validation'    => \Illuminate\Validation\ValidationServiceProvider::class,
        'wp.file'      => \WPINT\Framework\Providers\FileServiceProvider::class,
        'wp.file.direct' => \WPINT\Framework\Providers\FileDirectServiceProvider::class,
        'cli'   => \WPINT\Framework\Providers\CLIServiceProvider::class,
        'migration' => \WPINT\Framework\Providers\MigrationServiceProvider::class,
        'vite' => \WPINT\Framework\Providers\ViteServiceProvider::class,
        'session'   => \Illuminate\Session\SessionServiceProvider::class,
        'wpapi'     =>  \Wpint\WPAPI\WPAPIServiceProvider::class,
        'inertia'   =>  \WPINT\Inertia\InertiaServiceProvider::class,
        // 'jwt'   =>  \Wpint\JWT\JWTServiceProvider::class,
        
    ],

];