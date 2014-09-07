<?php

use MaxVoloshin\PsyshVsBoris\Psysh\BrandPresenter;
use MaxVoloshin\PsyshVsBoris\Psysh\CarPresenter;
use MaxVoloshin\PsyshVsBoris\Psysh\CountryPresenter;
use MaxVoloshin\PsyshVsBoris\Psysh\ModelPresenter;

require_once __DIR__ . '/vendor/autoload.php';

$config = new \Psy\Configuration();

$config->addPresenters([
    new CountryPresenter(),
    new BrandPresenter(),
    new ModelPresenter(),
    new CarPresenter()
]);

$shell = new \Psy\Shell($config);
$shell->setScopeVariables(['foo' => 'bar']);

$shell->run();