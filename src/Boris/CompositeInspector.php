<?php


namespace MaxVoloshin\PsyshVsBoris\Boris;

use Boris\Inspector;

class CompositeInspector implements Inspector
{
    /**
     * @var Inspector[]
     */
    private $inspectors;

    public function add(Inspector $inspector)
    {
        $this->inspectors[] = $inspector;
    }

    public function inspect($value)
    {
        $result = null;
        foreach ($this->inspectors as $inspector) {
            if (($result = $inspector->inspect($value)) !== null) {
                break;
            }
        }
        return $result;
    }
}