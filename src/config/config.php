<?php

return [

    'adapter' => env('PROMETHEUS_ADAPTER', 'redis'), // currently redis support only

    'namespace' => 'app',

    'namespace_http_server' => 'http',

    'histogram_buckets' => [50, 100, 300, 500, 700, 900, 1000, 1200, 1500, 2000, 3000, 5000, 7500],

    'redis' => [
        'host'                   => env('PROMETHEUS_REDIS_HOST', env('REDIS_HOST', '127.0.0.1')),
        'port'                   => env('PROMETHEUS_REDIS_PORT', env('REDIS_PORT', 6379)),
        'password'               => env('PROMETHEUS_REDIS_PASSWORD', env('REDIS_PASSWORD', null)),
        'timeout'                => 0.1,  // in seconds
        'read_timeout'           => 10, // in seconds
        'persistent_connections' => false,
    ],
];
