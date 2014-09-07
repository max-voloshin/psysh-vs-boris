<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

class BrandInspector extends NestedInspector
{
    public function inspect($value)
    {
        return $value instanceof \Brand
            ? $this->handle([
                'name' => $value->getName(),
                'country' => $value->getCountry()
            ])
            : null;
    }
}