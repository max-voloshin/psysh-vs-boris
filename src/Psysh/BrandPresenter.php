<?php

namespace MaxVoloshin\PsyshVsBoris\Psysh;

use Psy\Presenter\ObjectPresenter;

class BrandPresenter extends ObjectPresenter
{
    public function canPresent($value)
    {
        return $value instanceof \Brand;
    }

    /**
     * @param \Brand $value
     * @param \ReflectionClass $class
     * @return array
     */
    protected function getProperties($value, \ReflectionClass $class)
    {
        return [
            'name' => $value->getName(),
            'country' => $value->getCountry()
        ];
    }
}