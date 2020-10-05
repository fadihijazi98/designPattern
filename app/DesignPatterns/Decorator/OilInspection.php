<?php


namespace App\DesignPatterns\Decorator;


class OilInspection implements Inspection
{
    private $inspection;

    public function __construct(Inspection $inspection)
    {
        $this->inspection = $inspection;
    }

    public function cost()
    {
        return (99.9+ $this->inspection->cost());
    }

    public function description()
    {
        return (" Oil Inspection," . $this->inspection->description());
    }
}
