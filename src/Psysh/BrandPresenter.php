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
        $properties = [
            'name' => $value->getName(),
            'country' => $value->getCountry()
        ];

        return array_merge(
            parent::getProperties($value, $class),
            $properties
        );
    }
}