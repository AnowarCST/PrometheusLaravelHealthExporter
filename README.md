# PrometheusLaravelHealthExporter

A Laravel Middleware to export API Status and Performance metrics for Prometheus. 

## Supported laravel versions
[![Laravel 5.5.*][icon-l56]][link-laravel]
[![Laravel 6.*][icon-l60]][link-laravel]
[![Laravel 7.*][icon-l60]][link-laravel]

### update your `composer.json`


    "repositories":[
        {
            "type": "vcs",
            "url": "https://github.com/AnowarCST/PrometheusLaravelHealthExporter.git"
        }
    ]


### Composer
> composer require anowarcst/prometheus-laravel-health-exporter:dev-master


### Add this middleware in `App\Http\Kernel.php`


    protected $middleware = [
        ...
        \AnowarCST\PrometheusLaravelApiHealth\Middleware\LaravelResponseTimeMiddleware::class,
    ];

### Check
Now check run your server `php artisan serve`

http://localhost:8000/metrics