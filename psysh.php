<?php

use MaxVoloshin\PsyshVsBoris\Psysh\BrandPresenter;
use MaxVoloshin\PsyshVsBoris\Psysh\CountryPresenter;

require_once __DIR__ . '/vendor/autoload.php';

$config = new \Psy\Configuration();

$config->addPresenters([
    new CountryPresenter(),
    new BrandPresenter(),
]);

$shell = new \Psy\Shell($config);
$shell->setScopeVariables(['foo' => 'bar']);

$shell->run();