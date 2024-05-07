<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 19.11.2022
 * Time: 13:26
 */

namespace MODX\Container\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void addModifier(string $modifier, callable $callback)
 * @method static void file($template, array $vars = [])
 * @see \MODX\Container\\MODX\Container\Extend\Fenomx
 */
class Fenomx extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'fenomx';
    }
}
