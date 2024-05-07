<?php
namespace Facades;

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
        return 'mmxFenom';
    }
}
