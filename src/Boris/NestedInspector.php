<?php

namespace MaxVoloshin\PsyshVsBoris\Boris;

use Boris\Inspector;

abstract class NestedInspector implements Inspector
{
    /**
     * @var Inspector
     */
    private $main;

    public function __construct(Inspector $main)
    {
        $this->main = $main;
    }

    protected function handle(array $data)
    {
        $result = [];

        foreach ($data as $key => $value) {
            $result[] = $key . ': ' . $this->main->inspect($value);
        }

        return '{' . implode('; ', $result) . '}';
    }
} 