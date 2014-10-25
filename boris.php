<?php

use Boris\ColoredInspector;
use MaxVoloshin\PsyshVsBoris\Boris\BrandInspector;
use MaxVoloshin\PsyshVsBoris\Boris\CompositeInspector;
use MaxVoloshin\PsyshVsBoris\Boris\CountryInspector;

require_once __DIR__ . '/vendor/autoload.php';

$inspector = new CompositeInspector();
$inspector->add(new BrandInspector($inspector));
$inspector->add(new CountryInspector($inspector));
$inspector->add(new ColoredInspector());

$boris = new \Boris\Boris();
$boris->setLocal(['foo' => 'bar']);
$boris->setInspector($inspector);
$boris->start();