<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

class CarInspector extends NestedInspector
{
    public function inspect($value)
    {
        return $value instanceof \Car
            ? $this->handle([
                'model' => $value->getModel(),
                'brand' => $value->getBrand(),
                'year' => $value->getYear()
            ])
            : null;
    }
}