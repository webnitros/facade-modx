<?php

use Illuminate\Support\Facades\Facade;
use function MODX\app;

define('MODX_API_MODE', true);
require 'index.php';


#########
# Facade как в Laravel
#########
$app = app();

# Наш Fenom или любой другой сервис
$app->singleton('fenom', function () {
    global $modx;
    return $modx->services->get('mmxFenom');
});


# Fenomx
$app->singleton('fenomx', function () {
    return new \MODX\Container\Extend\Fenomx();
});

Facade::clearResolvedInstances();
Facade::setFacadeApplication($app);


#########
## Используем Facade
#########

#########
# Регистрируем модификатор

\MODX\Container\Facades\Fenom::addModifier('hello', static function ($var) {
    return $var . ' World!';
});


#########
# Использование

echo "Fenom" . PHP_EOL;
echo \MODX\Container\Facades\Fenom::fetch('file:chunks/test.tpl', ['name' => 'Hello']);


echo "Fenomx" . PHP_EOL;
echo \MODX\Container\Facades\Fenomx::file('chunks/test.tpl', ['name' => 'Hello']);


echo "Modx Fenom" . PHP_EOL;
$service = $modx->services->get('mmxFenom');
echo $service->fetch('file:chunks/test.tpl', ['name' => 'Hello']);

