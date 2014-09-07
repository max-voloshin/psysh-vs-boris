<?php

class Brand
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Country
     */
    private $country;

    /**
     * @param string $name
     * @param Country $country
     */
    public function __construct($name, Country $country)
    {
        $this->name = $name;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }
}