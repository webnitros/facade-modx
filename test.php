<?php

use Illuminate\Support\Facades\Facade;
use function MODX\app;

define('MODX_API_MODE', true);
require 'index.php';

Facade::clearResolvedInstances();
Facade::setFacadeApplication($modx->services);

echo Facades\Fenom::fetch('file:chunks/test.tpl', ['name' => 'Hello']);


echo "Modx Fenom" . PHP_EOL;
$service = $modx->services->get('mmxFenom');
echo $service->fetch('file:chunks/test.tpl', ['name' => 'Hello']);

