<?php

namespace MaxVoloshin\PsyshVsBoris\Psysh;

use Psy\Presenter\ObjectPresenter;

class CountryPresenter extends ObjectPresenter
{
    public function canPresent($value)
    {
        return $value instanceof \Country;
    }

    /**
     * @param \Country $value
     * @param \ReflectionClass $class
     * @return array
     */
    protected function getProperties($value, \ReflectionClass $class)
    {
        $properties = [
            'name' => $value->getName()
        ];

        return array_merge(
            parent::getProperties($value, $class),
            $properties
        );
    }
}