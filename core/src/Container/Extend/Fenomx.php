<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 07.05.2024
 * Time: 12:14
 */

namespace MODX\Container\Extend;


use MODX\Container;

class Fenomx
{

    public function file($template, array $vars = [])
    {
        return Container\Facades\Fenom::fetch('file:' . $template, $vars);
    }
}
