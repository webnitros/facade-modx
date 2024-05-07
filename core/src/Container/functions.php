<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 07.05.2024
 * Time: 11:19
 */

namespace MODX;

if (!function_exists('app')) {

    /**
     * Get the available container instance.
     *
     * @param string|null $abstract
     * @param array $parameters
     * @return mixed|\MODX\Container\Application
     */
    function app($abstract = null, array $parameters = [])
    {
        if (is_null($abstract)) {
            return Container\Application::getInstance();
        }
        return Container\Application::getInstance()->make($abstract, $parameters);
    }
}

