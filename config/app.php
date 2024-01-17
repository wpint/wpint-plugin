<?php

return [

    /**
     * Plugin path
     */
    'plugin_path' => WPINT_PLUGIN_PATH,
    

    /**
     * Plugin URI
     */
    'plugin_uri' => WPINT_PLUGIN_URI,
    

    'providers' => [
        \WPINT\Framework\Providers\AppServiceProvider::class, 
        \WPINT\Framework\Providers\RequestServiceProvider::class, 
        \WPINT\Framework\Providers\EnvServiceProvider::class, 
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
        \WPINT\Framework\Providers\ConsoleServiceProvider::class,
        \WPINT\Framework\Providers\MigrationServiceProvider::class,
        \Wpint\WPAPI\WPAPIServiceProvider::class,
        // \Wpint\JWT\JWTServiceProvider::class,

        // App Providers
        \App\Providers\WPServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,        
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
        'console'   => \WPINT\Framework\Providers\ConsoleServiceProvider::class,
        'migration' => \WPINT\Framework\Providers\MigrationServiceProvider::class,
        'session'   => \Illuminate\Session\SessionServiceProvider::class,
        'wpapi'   =>  \Wpint\WPAPI\WPAPIServiceProvider::class,
        // 'JWT'   =>  \Wpint\JWT\JWTServiceProvider::class,
        
    ],

];