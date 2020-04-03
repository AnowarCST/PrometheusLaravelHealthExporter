<?php

namespace AnowarCST\PrometheusLaravelHealthExporter;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class LaravelRequestMonitoringServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('AnowarCST\PrometheusLaravelHealthExporter\Controllers\PrometheusController');

        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'prometheus_exporter');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $source = realpath(__DIR__ . '/config/config.php');
        $this->publishes([$source => config_path('prometheus_exporter.php')]);

        $kernel->pushMiddleware(LaravelRequestMonitoringServiceProvider::class);
    }
}
