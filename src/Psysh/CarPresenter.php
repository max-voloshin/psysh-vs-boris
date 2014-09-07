<?php

namespace MaxVoloshin\PsyshVsBoris\Psysh;

use Psy\Presenter\ObjectPresenter;

class CarPresenter extends ObjectPresenter
{
    public function canPresent($value)
    {
        return $value instanceof \Car;
    }

    /**
     * @param \Car $value
     * @param \ReflectionClass $class
     * @return array
     */
    protected function getProperties($value, \ReflectionClass $class)
    {
        $properties = [
            'model' => $value->getModel(),
            'brand' => $value->getBrand(),
            'year' => $value->getYear()
        ];

        return array_merge(
            parent::getProperties($value, $class),
            $properties
        );
    }

} 