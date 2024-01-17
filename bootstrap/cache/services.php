<?php return array (
  'providers' => 
  array (
    0 => 'WPINT\\Framework\\Providers\\AppServiceProvider',
    1 => 'WPINT\\Framework\\Providers\\RequestServiceProvider',
    2 => 'WPINT\\Framework\\Providers\\EnvServiceProvider',
    3 => 'Illuminate\\Events\\EventServiceProvider',
    4 => 'Illuminate\\Database\\DatabaseServiceProvider',
    5 => 'Illuminate\\Cache\\CacheServiceProvider',
    6 => 'Illuminate\\Session\\SessionServiceProvider',
    7 => 'Illuminate\\Validation\\ValidationServiceProvider',
    8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    9 => 'Illuminate\\View\\ViewServiceProvider',
    10 => 'WPINT\\Framework\\Providers\\FileServiceProvider',
    11 => 'WPINT\\Framework\\Providers\\FileDirectServiceProvider',
    12 => 'WPINT\\Framework\\Providers\\CLIServiceProvider',
    13 => 'WPINT\\Framework\\Providers\\ConsoleServiceProvider',
    14 => 'WPINT\\Framework\\Providers\\MigrationServiceProvider',
    15 => 'Wpint\\WPAPI\\WPAPIServiceProvider',
    16 => 'App\\Providers\\WPServiceProvider',
    17 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'WPINT\\Framework\\Providers\\AppServiceProvider',
    1 => 'WPINT\\Framework\\Providers\\RequestServiceProvider',
    2 => 'WPINT\\Framework\\Providers\\EnvServiceProvider',
    3 => 'Illuminate\\Events\\EventServiceProvider',
    4 => 'Illuminate\\Database\\DatabaseServiceProvider',
    5 => 'Illuminate\\Session\\SessionServiceProvider',
    6 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    7 => 'Illuminate\\View\\ViewServiceProvider',
    8 => 'WPINT\\Framework\\Providers\\FileServiceProvider',
    9 => 'WPINT\\Framework\\Providers\\FileDirectServiceProvider',
    10 => 'WPINT\\Framework\\Providers\\CLIServiceProvider',
    11 => 'WPINT\\Framework\\Providers\\ConsoleServiceProvider',
    12 => 'WPINT\\Framework\\Providers\\MigrationServiceProvider',
    13 => 'Wpint\\WPAPI\\WPAPIServiceProvider',
    14 => 'App\\Providers\\WPServiceProvider',
    15 => 'App\\Providers\\RouteServiceProvider',
  ),
  'deferred' => 
  array (
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'Illuminate\\Contracts\\Validation\\UncompromisedVerifier' => 'Illuminate\\Validation\\ValidationServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
  ),
);