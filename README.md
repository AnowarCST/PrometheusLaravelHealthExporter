# PrometheusLaravelHealthExporter

A Laravel Middleware to export API Health, Status and Performance metrics for Prometheus and Grafana. 



## Install via Composer
    composer require anowarcst/prometheus-laravel-health-exporter

#### Vendor publish 
To publish config file prometheus_exporter.php

    php artisan vendor:publish --provider="AnowarCST\PrometheusLaravelHealthExporter\LaravelRequestMonitoringServiceProvider"

#### Add this middleware in `App\Http\Kernel.php`


    protected $middleware = [
        ...
        \AnowarCST\PrometheusLaravelApiHealth\Middleware\RequestExporter::class,
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



## Grafana

[Grafana Dashboard](https://grafana.com/grafana/dashboards)

