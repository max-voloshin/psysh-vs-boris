<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

class ModelInspector extends NestedInspector
{
    public function inspect($value)
    {
        return $value instanceof \Model
            ? $this->handle(['name' => $value->getName()])
            : null;
    }
}