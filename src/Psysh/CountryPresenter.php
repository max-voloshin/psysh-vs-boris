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
        return [
            'name' => $value->getName()
        ];
    }
}