<?php

namespace AnowarCST\PrometheusLaravelHealthExporter\Middleware;


class ResponseTimeMiddleware extends ResponseTimeHandler
{
    protected function getRouteNames(): array
    {
        $routeNames = [];
        foreach (\Route::getRoutes() as $route) {
            $routeNames[] = $route->getName() ?: $route->uri();
        }
        return $routeNames;
    }

    /**
     * Get route name
     *
     * @return string
     */
    protected function getRouteName(): string
    {
        return \Route::currentRouteName() ?: \Request::path();
    }
}
