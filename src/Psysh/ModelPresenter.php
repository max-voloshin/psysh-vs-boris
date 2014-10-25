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
        return [
            'name' => $value->getName()
        ];
    }
}