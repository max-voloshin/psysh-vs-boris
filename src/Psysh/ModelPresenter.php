<?php

namespace MaxVoloshin\PsyshVsBoris\Psysh;

use Psy\Presenter\ObjectPresenter;

class ModelPresenter extends ObjectPresenter
{
    public function canPresent($value)
    {
        return $value instanceof \Model;
    }

    /**
     * @param \Model $value
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