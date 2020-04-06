# PrometheusLaravelHealthExporter

A very simple Prometheus exporter for Laravel 6.* and 7.* supported. Basically a Middleware to export API Health, Status and Performance metrics of Laravel API.

## Supported version
- Laravel 5.5-5.9, 6.* and 7.*
- PHP 5.6 - 7.4

## Pre-installed
- Redis
- Laravel

## Install via Composer
    composer require anowarcst/prometheus-laravel-health-exporter

#### Vendor publish 
To publish config file

    php artisan vendor:publish --provider="AnowarCST\PrometheusLaravelHealthExporter\LaravelRequestMonitoringServiceProvider"

if your Redis host is not the default one, please update Redis host, port in your *.env* or *prometheus_exporter.php*

#### Add this middleware in `App\Http\Kernel.php`


    protected $middleware = [
        ...
        \AnowarCST\PrometheusLaravelHealthExporter\Middleware\RequestExporter::class,
    ];


#### Preview

    php artisan serve

http://localhost:8000/metrics

## Prometheus
Update `prometheus.yml`

    scrape_configs:
        - job_name: 'laravel'
            static_configs:
            - targets: ['localhost:8000']

Restart your Prometheus Server. (Update *localhost:8000* if you are using prometheus in different server)

## Grafana

[Grafana Dashboard](https://grafana.com/grafana/dashboards)

