<?php

namespace AnowarCST\PrometheusLaravelHealthExporter\Controllers;

use App\Http\Controllers\Controller;
use Prometheus\CollectorRegistry;
use Prometheus\RenderTextFormat;

class PrometheusController extends Controller
{
    /**
     * metrics
     *
     * Expose metrics for prometheus
     *
     * @return Response
     */
    public function metrics()
    {
        $registry = CollectorRegistry::getDefault();

        $renderer = new RenderTextFormat();
        $result = $renderer->render($registry->getMetricFamilySamples());


        return response($result)
            ->header('Content-type', RenderTextFormat::MIME_TYPE);
    }
}
