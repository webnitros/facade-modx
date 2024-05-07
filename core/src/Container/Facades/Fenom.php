<?php
/**
 * Created by Andrey Stepanenko.
 * User: webnitros
 * Date: 19.11.2022
 * Time: 13:26
 */

namespace MODX\Container\Facades;

use Illuminate\Support\Facades\Facade;
use MMX\Fenom\App;

/**
 * @method static void addModifier(string $modifier, callable $callback)
 * @method static void fetch($template, array $vars = [])
 * @see App
 */
class Fenom extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'fenom';
    }
}
