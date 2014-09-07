<?php

class Car
{
    /**
     * @var Model
     */
    private $model;

    /**
     * @var Brand
     */
    private $brand;

    /**
     * @var int
     */
    private $year;

    /**
     * @param Model $model
     * @param Brand $brand
     * @param int $year
     */
    public function __construct(Model $model, Brand $brand, $year)
    {
        $this->model = $model;
        $this->brand = $brand;
        $this->year = $year;
    }

    /**
     * @return Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

}