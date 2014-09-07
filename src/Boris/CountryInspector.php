<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

class CountryInspector extends NestedInspector
{
    public function inspect($value)
    {
        return $value instanceof \Country
            ? $this->handle(['name' => $value->getName()])
            : null;
    }
}