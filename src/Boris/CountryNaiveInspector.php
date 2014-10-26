<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

use Boris\ColoredInspector;
use Boris\Inspector;

class CountryNaiveInspector implements Inspector
{
    public function inspect($value)
    {
        return $value instanceof \Country
            ? json_encode(['name' => $value->getName()])
            : (new ColoredInspector())->inspect($value);
    }
}