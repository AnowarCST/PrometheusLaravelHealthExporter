<?php

Route::get(
    'metrics',
    \AnowarCST\PrometheusLaravelHealthExporter\Controllers\PrometheusController::class . '@metrics'
)->name('metrics');
